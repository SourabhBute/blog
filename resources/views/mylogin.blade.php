<h1>Form</h1>
<form method="get" action="userLogin">
    {{@csrf_field()}}
       <table>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="email"></td>
                @error('email')
                  {{$message}}
                @enderror
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" id="password"></td>
                @error('password')
                  {{$message}}
                @enderror
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>

            {{session('error')}}
       </table>    
</form>