<tr>
    <td>
        <div class="checkbox custom-checkbox nm">
            <input type="checkbox" id="user-{{$user->id}}" value="1" data-toggle="selectrow" data-target="tr" data-contextual="info" >
            <label for="user-{{$user->id}}"></label>
        </div>
    </td>
	<td> {{$user->full_name()}} <a href="{{route('user.edit', ['id' => $user->id])}}"><i class="icon ico-pencil"></i></a> </td>
	<td> {{$user->email}} </td>
	<td> {{$user->created_at->toDateString()}} </td>
    <td class="text-center">
        <!-- button toolbar -->
        <div class="toolbar">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-default">Action</button>
                <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="{{route('user.edit', ['id' => $user->id])}}"><i class="icon ico-pencil"></i>Update</a></li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{route('user.delete', ['id' => $user->id])}}" class="text-danger"
                            onclick="event.preventDefault();document.getElementById('delete-form-{{$user->id}}').submit();">
                            <i class="icon ico-remove3"></i>Delete
                        </a>

                        <form id="delete-form-{{$user->id}}" action="{{route('user.delete', ['id' => $user->id])}}" method="POST" style="display: none;">
                            <input type="hidden" name="_method" value="delete" />
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <!--/ button toolbar -->
    </td>
</tr>