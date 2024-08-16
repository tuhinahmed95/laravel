@extends('admin.layouts.app')

@section('content')

<!-- কন্টেন্ট হেডার -->
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Category</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('categories.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</section>

<!-- মূল কন্টেন্ট -->
<section class="content">
    <div class="container-fluid">
        <form action="{{ route('categories.store') }}" method="post" id="categoryForm" name="categoryForm"> 

            <div class="card">
                <div class="card-body">								
                    <div class="row">
                        <!-- ক্যাটাগরি নাম ইনপুট -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                <p></p>	
                            </div>
                        </div>

                        <!-- ক্যাটাগরি স্লাগ ইনপুট (রিড-অনলি) -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="slug">Slug</label>
                                <input type="text" readonly name="slug" id="slug" class="form-control" placeholder="Slug">	
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
                        </div>

                        <!-- স্ট্যাটাস সিলেক্ট -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Block</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>							
            </div>

            <!-- সাবমিট এবং ক্যানসেল বাটন -->
            <div class="pb-5 pt-3">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{ route('categories.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
            </div>
        </form>
    </div>
</section>

@endsection


@section('customjs')
<script> 
    // ফর্ম সাবমিট করার ইভেন্ট হ্যান্ডলার
    $("#categoryForm").submit(function(event){ 
        event.preventDefault();  
        var element = $(this);
        $("button[type=submit]").prop('disabled', true);

        $.ajax({ 
            url: '{{ route("categories.store") }}',
            type: 'POST',
            data: element.serializeArray(),  
            dataType: 'json',
            success: function(response){ 
                $("button[type=submit]").prop('disabled', false);

                // সফল হলে রিডাইরেক্ট করা হবে
                if (response["status"] == true) { 
                    window.location.href = "{{ route('categories.index') }}";
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

    // ক্যাটাগরির নাম পরিবর্তন করলে স্লাগ জেনারেট করা হবে
    $("#name").change(function(){ 
        var element = $(this);
        $("button[type=submit]").prop('disabled', true);

        $.ajax({ 
            url: '{{ route("getSlug") }}',
            type: 'get',
            data: {title: element.val()},  
            dataType: 'json',
            success: function(response){ 
                $("button[type=submit]").prop('disabled', false);

                if(response["status"] == true) { 
                    $("#slug").val(response["slug"]);
                }
            }
        });
    });

    // ড্রপজোন কনফিগারেশন
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
