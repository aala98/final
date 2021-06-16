@extends('super.dashboard')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Create a user</div>
				<div class="card-body">
					<form action="{{ route('users.update', $user) }}" method="post">
						@csrf
						@method('PATCH')

                        <div class="form-row">
                            <div  class="form-group col-md-6">
                                <label class="form-label">name</label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                            </div>
                            <div class="form-group col-md-6">
								<label class="form-label">prenom</label>
								<input type="text" name="prenom" class="form-control" value="{{ $user->prenom }}">
							</div>

						</div>
                        <div class="form-row">
							<div class="form-group col-md-6">
								<label class="form-label">tel</label>
								<input type="text" name="tel" class="form-control" value="{{ $user->tel }}">
							</div>
                                <div class="form-group col-md-6">
                                    <label class="form-label">ville</label>
                                    <select name="ville" class="form-control"  value="{{ $user->ville }}">
                                        <option value="Ariana">Ariana</option>
                                        <option value="Béja">Béja</option>
                                        <option value="Ben Arous">Ben Arous</option>
                                        <option value="Bizerte">Bizerte</option>
                                        <option value="Gabès">Gabès</option>
                                        <option value="Gafsa">Gafsa</option>
                                        <option value="Jendouba">Jendouba</option>
                                        <option value="Kairouan">Kairouan</option>
                                        <option value="Kasserine">Kasserine</option>
                                        <option value="Kébili">Kébili</option>
                                        <option value="Le Kef">Le Kef</option>
                                        <option value="Mahdia">Mahdia</option>
                                        <option value="La Manouba">La Manouba</option>
                                        <option value="Médenine">Médenine</option>
                                        <option value="Monastir">Monastir</option>
                                        <option value="Nabeul">Nabeul</option>
                                        <option value="Sfax">Sfax</option>
                                        <option value="Sidi Bouzid">Sidi Bouzid</option>
                                        <option value="Siliana">Siliana</option>
                                        <option value="Tataouine">Tataouine</option>
                                        <option value="Tozeur">Tozeur</option>
                                        <option value="Tunis">Tunis</option>
                                        <option value="Zaghouan">Zaghouan</option>
                                        </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">email</label>
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Password</label>
                                    <input type="password" name="password" class="form-control" id="inputEmail4">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="inputPassword4">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="form-label">Gender</label>
                                    <select name="sexe" class="form-control" value="{{ $user->sexe }}">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                </div>


                                <div class="form-group col-md-6">
                                    <label class="form-label">date_nessaince</label>
                                    <input type="date" name="date_nessaince" class="form-control" value="{{ $user->date_nessaince }}">
                                </div>
                            </div>

                        <div class="form-group">
                            <label class="form-label">image</label>
                            <input type="file" name="image" class="form-control">
                            <img src="/image/{{ $user->image }}" width="300px">
                        </div>
						<div class="form-group">
							<label class="form-label">Attach role</label>
							<select class="form-control" name="role">
								@foreach($roles as $role)
								<option value="{{ $role->id }}">{{ $role->display_name }}</option>
								@endforeach
							</select>
						</div>
						<button type="submit" class="btn btn-primary btn-sm">Save edit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
