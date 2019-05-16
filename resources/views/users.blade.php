@foreach($users as $user)

<ul>
    
    <li>
        <div class="row">
        
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $user->name }}

                by 
                {{ $user->id }}
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
                
                
            </div>
        </div>
    </div>
    </li>

</ul>

@endforeach