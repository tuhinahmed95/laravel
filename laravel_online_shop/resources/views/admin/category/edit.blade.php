@extends('admin.layouts.app')

@section('content')

<!-- কন্টেন্টের হেডার -->
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Category</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('categories.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</section>

<!-- মূল কন্টেন্ট -->
<section class="content">
    <!-- বক্স -->
    <div class="container-fluid">
        <form action="#" method="post" id="categoryForm" name="categoryForm"> 

            <!-- কার্ড -->
            <div class="card">
                <div class="card-body">								
                    <div class="row">
                        <!-- ক্যাটাগরি নাম -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{$category->name}}">
                                <p></p>	
                            </div>
                        </div>

                        <!-- স্লাগ -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="slug">Slug</label>
                                <input type="text" readonly name="slug" id="slug" class="form-control" placeholder="Slug" value="{{$category->slug}}">	
                                <p></p>
                            </div>
                        </div>	

                        <!-- ইমেজ আপলোড -->
                        <div class="col-md-6"> 
                            <div class="mb-3">
                                <input type="hidden" id="image_id" name="image_id" value="">
                                <label for="image">Image</label>
                                <div id="image" class="dropzone dz-clickable"> 
                                    <div class="dz-message needsclick">
                                        <br>Drop Files here or click to upload. <br><br>
                                    </div>
                                </div>
                            </div>
                            @if(!empty($category->image))
                                <div>
                                    <img width="250" src="{{ asset('uploads/category/thumb/' . $category->image) }}" alt="">
                                </div>
                            @endif
                        </div>

                        <!-- স্ট্যাটাস -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option {{ ($category->status ==1)? 'selected': '' }} value="1">Active</option>
                                    <option {{ ($category->status ==0)? 'selected': '' }} value="0">Block</option>
                                </select>
                            </div>
                        </div>								
                    </div>
                </div>							
            </div>

            <!-- সাবমিট বাটন -->
            <div class="pb-5 pt-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('categories.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
            </div>
        </form>
    </div>
</section>

@endsection

@section('customjs')
<script> 
    
    $("#categoryForm").submit(function(event){ 
        event.preventDefault();  
        var element = $(this);
        $("button[type=submit]").prop('disabled',true);

        $.ajax({ 
            url: '{{ route("categories.update", $category->id) }}',
            type: 'put',
            data: element.serializeArray(),  
            dataType: 'json',
            success: function(response){ 
                $("button[type=submit]").prop('disabled',false);

                if (response["status"] == true) { 
                    window.location.href="{{ route('categories.index') }}";
                }

                var errors = response['errors'];
                if(errors['name']){ 
                    $("#name").addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors['name']);
                }
                if(errors['slug']){ 
                    $("#slug").addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(errors['slug']);
                }
            },
            error: function(jqXHR, exception){ 
                console.log("Something went wrong");
            }
        });
    });

    $("#name").change(function(){ 
        var element = $(this);
        $("button[type=submit]").prop('disabled',true);

        $.ajax({ 
            url: '{{ route("getSlug") }}',
            type: 'get',
            data: { title: element.val() },  
            dataType: 'json',
            success: function(response){ 
                $("button[type=submit]").prop('disabled',false);
                if(response["status"] == true) { 
                    $("#slug").val(response["slug"]);
                }
            }
        });
    });

    Dropzone.autoDiscover = false;
    const dropzone = $("#image").dropzone({ 
        init: function(){ 
            this.on('addedfile', function(file){ 
                if(this.files.length > 1){ 
                    this.removeFile(this.files[0]); 
                }
            });
        },
        url: "{{ route('temp-images.create') }}", 
        maxFiles: 1, 
        paramName: 'image', 
        addRemoveLinks: true, 
        acceptedFiles: "image/jpeg,image/png,image/gif", 
        headers: { 
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
        },
        success: function(file, response){ 
            $("#image_id").val(response.image_id); 
        }
    });
</script>
@endsection
