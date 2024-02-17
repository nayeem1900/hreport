@extends('backend.layouts.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Hospital Information Form</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Hospital Info Form</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <!-- /.row -->
                <!-- Main row -->
                <div class="row" >
                    <!-- Left col -->
                    <section class="col-md-12">
                        <!-- Custom tabs (Charts with tabs)-->


                        <div class="card">
                            <div class="card-header">

                                @if(isset($editData))
                                    <h3> Edit Hospital Info Form
                                        @else
                                            Add Hospital Info Form
                                        @endif

                                        <a class="btn btn-success float-right btn-sm" href=""><i class="fa fa-list"></i>Hospital Info Form List</a>
                                    </h3>


                            </div><!-- /.card-header -->
                            <div class="card-body" >
                                <form method="POST" action="" id="myForm" enctype="multipart/form-data" >
                                    @csrf

                                    <div class="form-row ">

                                        <div class="col-md-4">
                                            <label>No. Of Patient Admit from Emergency  <font style="color: red">*</font></label>
                                            <input type="text" name="name" value="" class="form-control form-control-sm"id="name">

                                        </div>

                                        <div class="col-md-4">
                                            <label>No. of Ward (Last Date) <font style="color: red">*</font></label>
                                            <input type="text" name="fname" value="" class="form-control form-control-sm"id="fname">

                                        </div>
                                        <div class="col-md-4">
                                            <label>No. of Ward Occupied <font style="color: red">*</font></label>
                                            <input type="text" name="mname" value="" class="form-control form-control-sm"id="mname">

                                        </div>
                                        <div class="col-md-4">
                                            <label>No. of Cabin (Last Date) <font style="color: red">*</font></label>
                                            <input type="text" name="mobile" value="" class="form-control form-control-sm"id="mobile">

                                        </div>
                                        <div class="col-md-4">
                                            <label>No. of Cabin Occupied <font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Total Hospital Bed <font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>	Total Hospital Bed Occupied <font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>No. of Admitted Patient <font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>	No. of Released Patient <font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>No. Of Emergency Patient <font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>No. of Consultants <font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>No. of Outdoor patients <font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Physiotherapy patients <font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Dental patients <font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>No. of CT Scan<font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>	No. of MRI<font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>No. of imaging (without CT & MRI)<font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>	No. of Lab Investigation<font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>No. of Operation <font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Canteen Sales<font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>	Drug outdoor sales<font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>	Drug Indoor sales<font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>	Total Drug Sales<font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>	Collection: Imaging<font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Collection :Lab<font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>

                                        <div class="col-md-4">
                                            <label>Collection : Hospital<font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>Estimated income<font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>	Estimated expense<font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>
                                        <div class="col-md-4">
                                            <label>	Estimated Net Income<font style="color: red">*</font></label>
                                            <input type="text" name="address" value="" class="form-control form-control-sm"id="address">

                                        </div>


                                        <div class="col-md-4">
                                            <label>Date of Entry <font style="color: red">*</font></label>
                                            <input type="date" name="dob" value="" class=" form-control form-control-sm " autocomplete="off" id="dob">

                                        </div>





                                    </div>



                                    <div class="form-group col-md-6"style="padding-top:30px;">
                                        <button type="submit" class="btn btn-primary btn-sm">

                                            {{(@$editData)?'Update':'Submit'}}

                                        </button>

                                    </div>

                                </form>



                            </div><!-- /.card-body -->
                        </div>



                    </section>

                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>



    <script type="text/javascript">
        $(document).ready(function () {


            $('#myForm').validate({
                rules: {
                    "name": {
                        required: true,
                    },
                    "fname": {
                        required: true,
                    },
                    "mname": {
                        required: true,

                    },
                    "mobile": {
                        required: true,

                    },
                    "address": {
                        required: true,

                    },
                    "gender": {
                        required: true,

                    },
                    "religion": {
                        required: true,

                    },
                    "dob": {
                        required: true,

                    },
                    "salary": {
                        required: true,

                    },

                    "designation_id": {
                        required: true,

                    },
                    "join_date": {
                        required: true,

                    }
                },

                messages: {


                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>






@endsection