<!-- Form -->
<p class="mt-4 fw-bolder display-6">New book</p>
<hr class="major mt-2 mb-4">
<form method="post" action="<?php echo base_url() . 'addbook' ?>">
	<div class="row gtr-uniform">
		<div class="col-12">
			<label for="title">Title</label>
			<input type="text" name="title" id="title" value="" />
		</div>
		<div class="col-12">
			<select name="category" id="category">
				<option value="null" disabled="" selected>Select category</option>
				<option>Computing</option>
				<option>Engineering</option>
				<option>Law</option>
				<option>Art</option>
				<option>Science</option>
				<option>Medicine</option>
				<option>Education</option>
				<option>Criminology</option>
				<option>Management</option>
				<option>Political Science</option>
			</select>
		</div>
		<div class="col-12">
			<select name="book_type" id="book_type">
				<option value="null" disabled="" selected>Select book type</option>
				<option>Project work</option>
				<option>Term paper</option>
				<option>Past questions</option>
				<option>Text book</option>
				<option>Manual</option>
				<option>eBook</option>
			</select>
		</div>

		<!-- Break -->
		<div class="col-12">
			<ul class="actions">
				<li><input type="submit" value="Add book" class="primary" id="myform" /></li>
				<!-- <li><input type="reset" value="Reset" /></li> -->
			</ul>
		</div>

	</div>
</form>