@extends('auth.admin.app-admin')

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Users <small>Some examples to get you started</small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Plus Table Design</small></h2>
                        <a href="{{ route('data-posts.create') }}" class="btn btn-success btn-sm ml-2"><i class="fa fa-edit"></i> Add Posts</a>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <p class="text-muted font-13 m-b-30">
                                        DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                                    </p>
                                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>
                                                <th><input type="checkbox" id="check-all" ></th>
                                            </th>
                                            <th>Title</th>
                                            <th>Content</th>
                                            <th>Created</th>
                                            <th>Updated</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                          @foreach ($posts as $post)
                                            <tr>
                                                <td>
                                                    <th><input type="checkbox" id="check-all" ></th>
                                                </td>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->content }}</td>
                                                <td>{{ date_format($post->created_at, "F d, Y H:s") }}</td>
                                                <td>{{ date_format($post->updated_at, "F d, Y H:s") }}</td>
                                                <td>
                                                  <a class="btn btn-warning btn-sm" href="{{ route('posts.show', $post->id) }}">View</a>
                                                  {{-- <a class="btn btn-primary btn-sm" href="{{ route('data-posts.edit', $post->id) }}">Edit</a> --}}
                                                  <a class="btn btn-primary btn-sm" href="{{ route('data-posts-edit', $post->id) }}">Edit</a>
                                                  <form action="{{ route('data-posts.destroy', $post->id) }}" method="post">
                                                      @csrf
                                                      @method('delete')
                                                      <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                                  </form>
                                                </td>
                                            </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
