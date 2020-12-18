<?php

namespace App\Http\Controllers;

use App\DataTables\projectsDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateprojectsRequest;
use App\Http\Requests\UpdateprojectsRequest;
use App\Repositories\projectsRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class projectsController extends AppBaseController
{
    /** @var  projectsRepository */
    private $projectsRepository;

    public function __construct(projectsRepository $projectsRepo)
    {
        $this->projectsRepository = $projectsRepo;
    }

    /**
     * Display a listing of the projects.
     *
     * @param projectsDataTable $projectsDataTable
     * @return Response
     */
    public function index(projectsDataTable $projectsDataTable)
    {
        return $projectsDataTable->render('projects.index');
    }

    /**
     * Show the form for creating a new projects.
     *
     * @return Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created projects in storage.
     *
     * @param CreateprojectsRequest $request
     *
     * @return Response
     */
    public function store(CreateprojectsRequest $request)
    {
        $input = $request->all();

        $projects = $this->projectsRepository->create($input);

        Flash::success('Projects saved successfully.');

        return redirect(route('projects.index'));
    }

    /**
     * Display the specified projects.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $projects = $this->projectsRepository->find($id);

        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.index'));
        }

        return view('projects.show')->with('projects', $projects);
    }

    /**
     * Show the form for editing the specified projects.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $projects = $this->projectsRepository->find($id);

        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.index'));
        }

        return view('projects.edit')->with('projects', $projects);
    }

    /**
     * Update the specified projects in storage.
     *
     * @param  int              $id
     * @param UpdateprojectsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateprojectsRequest $request)
    {
        $projects = $this->projectsRepository->find($id);

        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.index'));
        }

        $projects = $this->projectsRepository->update($request->all(), $id);

        Flash::success('Projects updated successfully.');

        return redirect(route('projects.index'));
    }

    /**
     * Remove the specified projects from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $projects = $this->projectsRepository->find($id);

        if (empty($projects)) {
            Flash::error('Projects not found');

            return redirect(route('projects.index'));
        }

        $this->projectsRepository->delete($id);

        Flash::success('Projects deleted successfully.');

        return redirect(route('projects.index'));
    }
}
