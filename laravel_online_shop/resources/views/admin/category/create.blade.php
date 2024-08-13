@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Category</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="categories.html" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="container-fluid">
        <form action="#" method="post" id="categoryForm" name="categoryForm"> 
 
            <div class="card">
                <div class="card-body">								
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name">	
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="slug">Slug</label>
                                <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug">	
                            </div>
                        </div>	
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
            <div class="pb-5 pt-3">
                <button type="submit" class="btn btn-primary">Create</button>
                <a href="#" class="btn btn-outline-dark ml-3">Cancel</a>
            </div>
     </form>
    </div>
    <!-- /.card -->
</section>
<!-- /.content -->

@endsection


@section('customjs')
<script> 
    $("#categoryForm").submit(function(event){ 
        event.preventDefault();  // preventDefault সঠিকভাবে লেখা হয়েছে
        var element = $(this);

        $.ajax({ 
            url: '{{ route("categories.store") }}',
            type: 'POST',
            data: element.serializeArray(),  // 'date' এর পরিবর্তে 'data'
            dataType: 'json',
            success: function(response){ 
                console.log("Form submitted successfully");
                // আপনি সফলতার পরে যা করতে চান তা এখানে যোগ করুন
            },
            error: function(jqXHR, exception){ 
                console.log("Something went wrong");
                // আপনি ত্রুটি ঘটলে যা করতে চান তা এখানে যোগ করুন
            }
        });
    });
</script>

@endsection