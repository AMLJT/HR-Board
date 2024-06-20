<h2>Add Employee</h2>
    <form id="employeeForm" action={{ route('employee.create') }} method="post">

        @csrf
        <label>Name:</label><br>
        <input type="text" id="emp_name" name="emp_name" required style="width: 80%;"><br><br>
        <label>Department:</label><br>
        <input type="text" id="department" name="department" required style="width: 80%;"><br><br>
        <label>Position:</label><br>
        <input type="text" id="position" name="position" required style="width: 80%;"><br><br>
        <label>Email:</label><br>
        <input type="text" id="email" name="email" required style="width: 80%;"><br><br>
        <label>Phone:</label><br>
        <input type="text" id="phone" name="phone" required style="width: 80%;"><br><br>
        <button class="btn2" type="submit">Submit</button>
        <button type="button" class="btn2" onclick="closePopup()">Cancel</button>
    </form>