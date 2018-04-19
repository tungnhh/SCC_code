@extends  ('user')
@section ('main')
    <div class="tab-content">
        <div class = "row">
            <form action="search_subject_name.php" method="post">
                <div class="input-group col col-md-3 col-sm-3 col-xs-12 search" >
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <div class="input-group-btn">
                        <button class="btn btn-primary btn-search" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="infor-sub">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">PRF192</a></h4>
                        <span>Total class: 15 Classes</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">PRF192</a></h4>
                        <span>Total class: 15 Classes</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">PRF192</a></h4>
                        <span>Total class: 15 Classes</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">PRF192</a></h4>
                        <span>Total class: 15 Classes</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">PRF192</a></h4>
                        <span>Total class: 15 Classes</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">PRF192</a></h4>
                        <span>Total class: 15 Classes</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">PRF192</a></h4>
                        <span>Total class: 15 Classes</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="infor-detail">
                        <h4><a href="#">PRF192</a></h4>
                        <span>Total class: 15 Classes</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Delete_Modal -->
    <div id="delete_btn" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><span class="fas fa-trash-alt"></span> Delete Subject</h4>
                </div>
                <div class="modal-body" style="padding:15px 30px;">
                    <h4>Select Subject....</h4>
                    <div class="table-responsive" ">
                        <table id="mytable" class="table table-bordred table-striped">
                            <thead>
                            <th><input type="checkbox" id="checkall" /></th>
                            <th>Subject Name</th>
                            <th><span class="fa fa-cog"></span></th>
                            </thead>
                            <tbody>
                            <tr>
                                <td><input type="checkbox" class="checkthis" /></td>
                                <td>Irshad</td>
                                <td><span data-placement="top" data-toggle="tooltip" title="Delete">
                                    <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" >
                                        <span class="glyphicon glyphicon-trash"></span></button></span>
                                </td>
                            </tr>

                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Edit_Modal -->
    <div id="edit_btn" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><span class="far fa-edit"></span> Edit Subject</h4>
                </div>
                <div class="modal-body">
                    <div class="row" style="margin:10px 0; ">
                        <div class="form-group plain-select" >
                            Select Subject:
                            <select class="form-control" >
                                <option>PRF192</option>
                                <option>PRJ321</option>
                                <option>PRJ311</option>
                            </select>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12">
                            <form action="editSubject" method="post">
                                <input class="form-control" name="subject" placeholder="Example: PRF192" type="text" required autofocus />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Add_Modal -->
    <div id="add_btn" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="panel-title" id="contactLabel"><span class="fas fa-plus-circle"></span> Add New Subject</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-lg-12 col-sm-12 col-xs-12">
                            <form action="addNewSubject" method="post">
                                <input class="form-control" name="subject" placeholder="Example: PRF192" type="text" required autofocus />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
                </div>
            </div>

        </div>
    </div>
    <!-- Delete btn -->
    <div class="edit_fixed " data-toggle="modal" data-target="#delete_btn">
        <div class="delete-phone">
            <div class="animated infinite pulse delete-ph-circle-fill"></div>
            <div class="animated infinite tada delete-ph-img-circle"></div>
        </div>

    </div>
    <!-- Edit btn -->
    <div class="edit_fixed " data-toggle="modal" data-target="#edit_btn">
        <div class="edit-phone">
            <div class="animated infinite pulse edit-ph-circle-fill"></div>
            <div class="animated infinite tada edit-ph-img-circle"></div>
        </div>

    </div>
    <!-- Add btn -->
    <div class="add_fixed " data-toggle="modal" data-target="#add_btn">
        <div class="add-phone">
            <div class="animated infinite pulse add-ph-circle-fill"></div>
            <div class="animated infinite tada add-ph-img-circle"></div>
        </div>
    </div>
@stop