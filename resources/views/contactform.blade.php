<form action = "{{ route('contact.store') }}" method = "post">
    {{csrf_field()}}

   <table>
       <tr>
           <td>Name</td>
           <td><input type = "text" name = "name"></td>
           <td><input type = "submit" name = "submit"></td>
       </tr>
   </table>

</form>