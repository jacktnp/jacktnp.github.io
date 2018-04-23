<!DOCTYPE html>
<html>
<head>
	<title>Login | Loofer เว็บสำหรับคนต้องการหาของหาย</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Kanit');

html{
  font-family: 'Kanit', sans-serif !important;
}
.row{
        margin: 10px;
}
body {
  background: url(assets/bg/bg_transparent_forum.png) #00aff0;
}
.form-control {
    font-size: 1rem;
    line-height: 1.5;
    color: rgb(73, 80, 87);
    background-color: rgb(255, 255, 255);
    background-clip: padding-box;
    padding: 0.375rem 0.75rem;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(206, 212, 218);
    border-image: initial;
    border-radius: 0.5rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  margin-top: 0.5em;
}
#newforum{
  color:#fff;
  border-color:#fff;
  width:100%;
}
#newforum:hover{
  color:#00aff0;
  border-color:#00aff0;
  background-color:#fff
}
.btn {
  margin-top: 1em;
    display: block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    user-select: none;
    font-size: 1rem;
    line-height: 1.5;
    border-width: 1px;
    border-style: solid;
    border-color: transparent;
    border-image: initial;
    padding: 0.375rem 0.75rem;
    border-radius: 1.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.btn-outline-info {
    color: #17a2b8;
    background-color: transparent;
    background-image: none;
    border-color: #17a2b8;
    cursor: pointer;
}
@keyframes spin {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

	</style>
</head>
<body>

    <h1 style="width:100%;background:#02a2de;color:#fff;text-align:center;padding:0.2em;margin-bottom:0.5em;">Loofer&nbsp; <a href="index.php"><img src="assets/logo/logo_pheeA.png" alt="Loofer Logo" width="50px"></a> Login</h1>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
          <div class="form-group">
           <label for="title" style="color:#ffff;">Username</label><br>
          <input type="text" class="form-control" style="background-color:#02a2de;border:0px;color:#fff !important;" id="title">
            </div>
          <div class="form-group">
        <label for="tel" style="color:#ffff;">Password</label><br>
      <input type="text" class="form-control" style="background-color:#02a2de;border:0px;color:#fff !important;margin-bottom:25px;" id="tel">
    </div>
          <button type="button" class="btn btn-outline-info" id="newforum">Login</button>
      </div>
  </div>
  <div class="col-md-4"></div>
  
  </div>
</body>
</html>