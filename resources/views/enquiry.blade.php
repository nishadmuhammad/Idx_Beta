<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<body>
    
<div class="row">
<div class="col-md-12 col-sd-6">
<div class="newform">

<form class="form-horizontal" method="POST" action="/api/enquiry">
 <div class="form-group">
  <label for="Name">Name: </label>
  <input type="text" class="form-control" id="names" placeholder="Name" name="name" required>
 </div>

 <div class="form-group">
  <label for="email">Email: </label>
  <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
 </div>

 <div class="form-group">
  <label for="message">Message: </label>
  <textarea type="text" class="form-control" id="message" placeholder="Enter your message here" name="message" required> </textarea>
 </div>
 <div class="form-group">
   <button type="submit" class="btn btn-primary" value="submit">submit</button>
 </div> 
</form>
</div>
</div>
</div>

</body>
<style>
   
   .newform{
            margin-left:255px;
            width:167px;
        }
  

</style>
</head>
