<h1>Form</h1>
<form method="post" action="formSubmit">
    {{@csrf_field()}}
       <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="name"></td>
                @error('name')
                  {{$message}}
                @enderror
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" id="email"></td>
                @error('email')
                  {{$message}}
                @enderror
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
       </table>    
</form>