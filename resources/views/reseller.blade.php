@include('partials.headermain')

    <h1 class="text-center pt-5 ">Reseller List</h1>
    <br>
    
      
            <div class="container">
                <div class="row mt-2">
                    <div class="col-lg-12">
                        <table class="table table-light  table-hover">
                            <a href="/reseller/register" class="color-white"  >Add Account</a>  
                            <a href="/reseller/add" class="color-white" >Add Reseller</a>
                            <thead >
                                <tr class="text-center">
                                    <th >First Name</th>
                                    <th >Last Name</th>
                                    <th >Age</th>
                                    <th >Gender</th>
                                    <th >Address</th>
                                    <th >Email</th>
                                    <th >Reseller Image</th>
                                    
                                </tr>
                
                            </thead>
                            <tbody>
                                @foreach ($resellers as $reseller)
                                <tr class="text-center">
                                   
                                    <td >
                                        {{ $reseller->first_name}}
                                    </td>
                                    <td >
                                        {{ $reseller->last_name}}
                                    </td>
                                    <td >
                                        {{ $reseller->age}}
                                    </td>
                                    <td >
                                        {{ $reseller->gender}}
                                    </td>
                                    <td >
                                        {{ $reseller->address}}
                                    </td>
                                    <td >
                                        {{ $reseller->email}}
                                    </td>
                                    <td >
                                        
                                    </td>
                                   
                
                                </tr>
                                @endforeach
                
                            </tbody>
                
                        </table>
        
                    </div>
                </div>
            </div>
    
       
    
@include('partials.footermain')




 
 
    