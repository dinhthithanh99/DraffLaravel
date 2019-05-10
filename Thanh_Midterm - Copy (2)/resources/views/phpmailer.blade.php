<div class="navbar navbar-default">
  <div class="container-fluid">
    <div class="nav navbar-nav navbar-right navbar-header">
      <a class="navbar-brand" href="javascript:void(0)">LaraMail <i class="material-icons">email</i></a>
    </div>
    <div class="navbar-right navbar-collapse collapse navbar-responsive-collapse">
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input class="form-control col-md-8" placeholder="Search" type="text">
        </div>
      </form>
    </div>
  </div>
</div>

<div class="jumbotron" style="background: white;width: 70%; display:table;margin: 10px auto;">
<form class="form-horizontal" method="post" action="sendmail">
{!! csrf_field() !!}
  <fieldset>
    <legend>Send me E-Mail</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-md-2 control-label">Email</label>

      <div class="col-md-10">
        <input class="form-control" id="inputEmail" placeholder="Email" type="email" name="getemail" required>
      </div>
    </div>
    <div class="form-group">
      <label for="Name" class="col-md-2 control-label">Name</label>
      <div class="col-md-10">
        <input class="form-control" id="Name" placeholder="Name" type="name" name="getname" required>
      </div>
    </div>

       <div class="form-group">
      <label for="subject" class="col-md-2 control-label">Subject</label>

      <div class="col-md-10">
        <input class="form-control" id="subject" placeholder="Subject" type="text" name="subject" required>
      </div>
    </div>
    
    <div class="form-group">
      <label for="textArea" class="col-md-2 control-label">Your Text</label>

      <div class="col-md-10">
        <textarea class="form-control" rows="3" id="textArea" name="content" required></textarea>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-10 col-md-offset-2">
        <button type="button" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Send</button>
      </div>
    </div>
  </fieldset>
</form>

</div>

