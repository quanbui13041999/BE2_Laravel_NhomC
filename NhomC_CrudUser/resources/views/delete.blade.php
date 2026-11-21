@extends('dashboard')

@section('content')


<main class="delete-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="card">
                    <h3 class="card-header text-center text-danger">Delete User</h3>

                    <div class="card-body">

                        {{-- THÔNG BÁO --}}
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        {{-- FORM DELETE --}}
                        <form id="deleteForm" action="{{ route('user.delete', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <p class="text-center">
                                Bạn có chắc muốn xóa user này không?
                            </p>

                            <div class="mb-3">
                                <label><strong>Name:</strong></label>
                                <input type="text" class="form-control" value="{{ $user->name }}" disabled>
                            </div>

                            <div class="mb-3">
                                <label><strong>Email:</strong></label>
                                <input type="text" class="form-control" value="{{ $user->email }}" disabled>
                            </div>

                            <div class="mb-3">
                                <label><strong>Phone:</strong></label>
                                <input type="text" class="form-control" value="{{ $user->phone }}" disabled>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="button" onclick="confirmDelete()" class="btn btn-danger">
                                    Confirm Delete
                                </button>

                                <a href="{{ route('user.list') }}" class="btn btn-secondary">
                                    Cancel
                                </a>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

{{-- SWEETALERT2 CDN --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
function confirmDelete() {
    Swal.fire({
        title: 'Bạn chắc chưa?',
        text: "Xóa là không khôi phục được!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Xóa',
        cancelButtonText: 'Hủy'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('deleteForm').submit();
        }
    });
}
</script>

@endsection
=======
    <main class="delete-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <h3 class="card-header text-center text-danger">Delete User</h3>

                        <div class="card-body">

                            {{-- THÔNG BÁO --}}
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                            {{-- FORM DELETE --}}
                            <form action="{{ route('user.delete', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <p class="text-center">
                                    Bạn có chắc muốn xóa user này không?
                                </p>

                                <div class="mb-3">
                                    <label><strong>Name:</strong></label>
                                    <input type="text" class="form-control" value="{{ $user->name }}" disabled>
                                </div>

                                <div class="mb-3">
                                    <label><strong>Email:</strong></label>
                                    <input type="text" class="form-control" value="{{ $user->email }}" disabled>
                                </div>

                                <div class="mb-3">
                                    <label><strong>Phone:</strong></label>
                                    <input type="text" class="form-control" value="{{ $user->phone }}" disabled>
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-danger">
                                        Confirm Delete
                                    </button>

                                    <a href="{{ route('user.list') }}" class="btn btn-secondary">
                                        Cancel
                                    </a>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

