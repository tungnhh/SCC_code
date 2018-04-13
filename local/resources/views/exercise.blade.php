@extends  ('user')
@section ('main')
    <div id="upFile" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">


                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#Computer" role="tab"><i class="fas fa-tv"></i> From Computer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#gg_driver" role="tab"><i class="fab fa-google-drive"></i> Google Drive</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!--Computer-->
                    <div  class="tab-pane active" id ="Computer">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">File upload form</h4>
                        </div>
                        <div class="modal-body">
                            <!-- Form -->
                            <form action="upload"  method="post"  enctype="multipart/form-data" >
                                <div class="box">
                                    <input type="file" name="file[]" id="file" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" accept=".zip" multiple >
                                    <label for="file"><span></span> <strong><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Choose a file&hellip;</strong></label>
                                </div>
                                <input type="submit" class="btn btn-info" value="Upload" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>

                            <!-- Preview-->
                            <div id="message"></div>


                        </div>
                    </div>
                    <!--GoogleDriver-->
                    <div  class="tab-pane" id ="gg_driver">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Drive</h4>
                        </div>
                        <div class="modal-body">
                            <!-- Form -->
                            <form action="googleDrive"  method="post"  enctype="multipart/form-data">
                                <div class="input-group">
                                    <input type="text"  name="drive_File"class="form-control" placeholder="Google Drive Link">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary load-driver" type="submit">
                                            <i class="fas fa-cloud-download-alt"></i>
                                        </button>
                                    </div>
                                </div>
                                <br>
                                <input type="submit" class="btn btn-info" value="Upload" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>

                            <!-- Preview-->
                            <div id="message"></div>


                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
    <div class="add_fixed " data-toggle="modal" data-target="#upFile">
        <div class="add-phone">
            <div class="animated infinite pulse add-ph-circle-fill"></div>
            <div class="animated infinite tada add-ph-img-circle"></div>
        </div>

    </div>
@stop