<!-------modal---->
<div class="col-md-12 col-xs-3 col-sm-4">
    <div class="modal fade " tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true"  id="loginmodal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="post" action="{{Route('register')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="my-input">Name</label>
                            <input id="my-input" class="form-control" type="text" name="name">
                        </div>
                    <div class="form-group">
                        <label for="my-input">Email</label>
                        <input id="my-input" class="form-control" type="text" name="email">
                    </div>
                
                    <div class="form-group">
                            <label for="my-input">Password</label>
                            <input id="my-input" class="form-control" type="password" name="password">
                        </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
            <p><span class="alert alert-danger ml-2"> You can use any of the submit button ...</span></p>
            <div class="modal-footer">
                    <button class="btn btn-primary  " data-dismiss="modal" aria-label="Close">Close</button>
            </div>
        </div>
    </div>
</div>


</div>


