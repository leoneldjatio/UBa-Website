<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" placeholder="What is the title of the release?"
        value="{{ old('title') ?? ($pressRelease->title ?? '') }}">
</div>

<div class="form-group">
    <label for="file">Upload the press file</label>
    {{-- @error('file')
    <p class="mb-0 small text-danger text-muted">{{ $message }}</p>
    @enderror --}}
    <input type="file" class="form-control-file" name="file" id="file" placeholder="Upload file"
        aria-describedby="fileHelpId">
    <small id="fileHelpId" class="form-text text-muted">File should not be more that 2GB of size</small>
</div>
