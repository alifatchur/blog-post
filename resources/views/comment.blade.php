<div class="container my-5 py-5 text-dark">

    <h3>Total Comment : <span class="text-secondary">{{ $total_comments }}</span></h3>
    @foreach ($comments as $comment)
        <div class="d-flex flex-start mb-4 mt-4">
        <img class="rounded-circle shadow-1-strong me-3"
            src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" alt="avatar" width="65"
            height="65" />
        <div class="card w-100">
            <div class="card-body p-4">
            <div class="">
                <h5>Anonymous</h5>
                <p class="small">3 hours ago</p>
                <p>{{ $comment->comment }}</p>

                <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    {{-- <a href="#!" class="link-muted me-2"><i class="fas fa-thumbs-up me-1"></i>132</a>
                    <a href="#!" class="link-muted"><i class="fas fa-thumbs-down me-1"></i>15</a> --}}
                </div>
                <a href="#!" class="link-muted"><i class="fas fa-reply me-1"></i> Reply</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    @endforeach

</div>
