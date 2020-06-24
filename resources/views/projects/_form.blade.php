@csrf
<div class="form-group">
	<label for="title">Título</label>
	<input class="form-control border-0 bg-light shadow-sm"
			id="title"
			type="text"
			name="title"
			placeholder="Título del proyecto ..."
			value="{{ old('title', $project->title) }}">
</div>


<div class="form-group">
	<label for="url">URL</label>
	<input class="form-control border-0 bg-light shadow-sm"
		id="url"
		type="text"
		name="url"
		placeholder="URL del proyecto ..."
		value="{{ old('url', $project->url) }}">
</div>

<div class="form-group">
	<label for="description">Descripción</label>
	<textarea class="form-control border-0 bg-light shadow-sm"
				id="description"
				name="description"
				placeholder="Descripción del proyecto ..." >{{ old('description', $project->description) }}
	</textarea>
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block" href="{{ route('projects.index') }}">
	Cancelar
</a>

