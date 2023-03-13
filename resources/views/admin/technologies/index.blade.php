@extends('layouts.app')

@section('title', 'Technologies')

@section('content')

    <header class="my-4 d-flex justify-content-between align-items-center">
        <h1>Technologies</h1>
        <a href="{{ route('admin.technologies.create') }}" class="btn btn-success me-2">
            <i class="fas fa-plus"></i>Add Type
        </a>
        {{-- <a href="{{ route('admin.types.trash.index') }}" class="btn btn-danger">Trash</a> --}}
    </header>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Label</th>
                <th scope="col">Color</th>
                <th scope="col">Icon</th>
                <th scope="col">Update at</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($technologies as $technology)
                <tr>
                    <th scope="row">{{ $technology->id }}</th>
                    <td>{{ $technology->label }}</td>
                    <td>{{ $technology->color }}</td>
                    <td>{{ $technology->updated_at }}</td>
                    <td>
                        <div class="d-flex">
                            <form action="{{ route('admin.technologies.destroy', $technology->id) }}" method="POST"
                                class="delete-form" data-name="technology">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger mx-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                            <a class="btn btn-sm btn-warning"
                                href="{{ route('admin.technologies.edit', $technology->id) }}">
                                <i class="fas fa-pencil"></i>
                            </a>
                        </div>
                    </td>

                </tr>
            @empty
                <tr>
                    <td scope="row" colspan="7" class="text-center">There aren't projects in portfolio with these
                        characteristics</td>
                </tr>
            @endforelse


        </tbody>
    </table>
    <hr>
    <div class="d-flex justify-content-end">
        @if ($technologies->hasPages())
            {{ $technologies->links() }}
        @endif
    </div>
@endsection

@section('scripts')
    <script>
        const filterForm = document.getElementById('filter-form');
        const filterStatus = document.getElementById('filter-status');
        filterStatus.addEventListener('change', () => {
            filterForm.submit();
        })
    </script>

    {{-- <script>
        const searchInput = document.getElementById('search-input');
        searchInput.addEventListener('input', () => {
            const searchValue = searchInput.value.trim();
        });
    </script> --}}

    <script>
        const filterType = document.getElementById('type_id');
        filterType.addEventListener('change', () => {
            filterForm.submit();
        })
    </script>
@endsection
