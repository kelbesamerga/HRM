@extends('master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Assign Role</h1>
        <div class="lead">
            
        </div>
        
        <div class="container mt-4">
            <form method="post" action="{{ route('users.update_role', $user->id) }}" enctype="multipart/form-data">
                @csrf
                {{-- @method('post') --}}
                <div class="mb-3">
                    <div>
                        Name: {{ $user->name }}
                    </div>
                    <div>
                        Email: {{ $user->email }}
                    </div>
                </div>
                {{-- <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input value="{{ $user->username }}"
                        type="text" 
                        class="form-control" 
                        name="username" 
                        placeholder="Username" required>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div> --}}
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    {{-- <input type="hidden" value="{{$user->id}}" name="user_id"> --}}
                    <select class="form-control" 
                        name="role" required>
                        <option value="">Select role</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}"
                                {{ in_array($role->name, $userRole) 
                                    ? 'selected'
                                    : '' }}>{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('role'))
                        <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Assign role</button>
                <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</button>
            </form>
        </div>

    </div>
@endsection