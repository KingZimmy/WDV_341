<?php include('header-contact.php'); ?>

<style>
.form-container {
  background-color: black;
  color: white;
  max-width: 1200px;
  margin: 0 auto;
  padding: 2rem;
}

.form-container label {
  color: white;
}

.form-container input,
.form-container textarea {
  background-color: white;
  color: black;
}

.form-container input[type="submit"] {
  background-color: white;
  color: black;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

</style>

<br>
<div class="form-container py-4">
  <h1 class="text-white text-center mb-4">Contact Form</h1>
    <form method="post" action="submit-form.php">

    <div class="mb-3">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" class="form-control" required>
</div>

<div class="mb-3">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" class="form-control" required>
</div>

<div class="mb-3">
      <label for="message">Message:</label>
      <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
</div>


      <div style="display:none">
        <label for="honeypot">Leave this field blank:</label>
        <input type="text" name="honeypot" id="honeypot">
      </div>

      <input type="submit" name="submit" value="Submit" class="btn btn-lg">
    </form>
  </div>
<br>
<!-- Bootstrap 5 JS code here -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ny2lDQm1sId/m9z4/KGxIg/0nITKfAK2nLeRSNdJNzAW1KjDnXN9YBp8FqbLFXgF" crossorigin="anonymous"></script>

<!-- Footer Goes Here -->
<?php include('footer.php'); ?>


<!-- Create a new PHP file and add the HTML form code to it. -->
<!-- Add the Honeypot method to your form. 
This is a way to trick spambots into filling out a field that humans can't see. Check if this field is empty or not. -->
