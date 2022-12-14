<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->

      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form">
            @csrf
            @method('PUT')
            <div class="col-md-3">
                <div class="text-center">
                  <img src="/profile/avatar/{{ Auth::user()->avatar }}" class="avatar img-circle" alt="avatar">
                  <h6>Upload a different photo...</h6>
                  
                  <input type="file" name="avatar" class="author__img" style="position: absolute; opacity: 0; cursor: pointer; z-index: 10" accept="avatar/*" onchange="loadFile(event)">
                </div>
              </div>
              
          <div class="form-group">
            <label class="col-lg-3 control-label">Enter Username</label>
            <div class="col-lg-8">
              <input class="form-control"name="name" type="text" value="{{ old('name') ? old('name') :Auth::user()->name }}"id="name">
              @if ($errors->any('name'))
              <span class="text-danger">{{ $errors->first('name') }}</span>
             @endif
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email"type="text" value="{{ old('email') ? old('email') : Auth::user()->email }}"id="email">
              @if ($errors->any('email'))
              <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">PhoneNumber:</label>
            <div class="col-lg-8">
              <input class="form-control" name="phone"type="text" value="{{ old('phone') ? old('phone') : Auth::user()->phone }}"id="phone">
              @if ($errors->any('phone'))
              <span class="text-danger">{{ $errors->first('phone') }}</span>
              @endif
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Time Zone:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select id="user_time_zone" class="form-control">
                  <option value="Hawaii">(GMT-10:00) Hawaii</option>
                  <option value="Alaska">(GMT-09:00) Alaska</option>
                  <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                  <option value="Arizona">(GMT-07:00) Arizona</option>
                  <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                  <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                  <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                  <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="janeuser">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="11111122333">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>