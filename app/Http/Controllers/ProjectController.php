<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Project;

class ProjectController extends Controller {
	public function __construct() {
		$this->middleware('auth')->except('index', 'show');
	}

	public function index() {
		return view('projects.index', [
			'projects' => Project::latest()->paginate(),
		]);
	}

	public function show(Project $project) {
		// ROUTE MODEL BIDING
		return view('projects.show', [
			'project' => $project,
		]);
	}

	public function create(Project $project) {

		return view('projects.create', [
			'project' => new Project,
		]);
	}

	public function store(SaveProjectRequest $request) {
		// usamos un formrequest para las reglas de validación
		Project::create($request->validated());

		return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito.');
	}

	public function edit(Project $project) {

		return view('projects.edit', [
			'project' => $project,
		]);
	}

	public function update(Project $project, SaveProjectRequest $request) {

		$project->update($request->validated());

		return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con éxito.');
	}

	public function destroy(Project $project) {

		$project->delete();

		return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con éxito.');
	}
}
