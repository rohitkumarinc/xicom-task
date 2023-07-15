<hr>
<div class="row">
    <div class="col">
        <label for="name">Event Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="col">
        <label for="organizer">Event Organizer</label>
        <input type="text" name="organizer" id="organizer" class="form-control" required>
    </div>
</div>

<div class="form-group">
    <label for="description">Event Description</label>
    <textarea name="description" id="description" class="form-control" required></textarea>
</div>

<div class="row">
    <div class="col">
        <label for="start_date">Start Date</label>
        <input type="date" name="start_date" id="start_date" class="form-control" required>
    </div>
    <div class="col">
        <label for="end_date">End Date</label>
        <input type="date" name="end_date" id="end_date" class="form-control" required>
    </div>
</div>

<h2>Tickets</h2>

<div class="form-group-item">
    <div class="">
        <div class="row">
            <div class="col-md-1">
                ID
            </div>
            <div class="col-md-4">
                Ticket No
            </div>
            <div class="col-md-4">
                Price
            </div>
            <div class="col-md-2 d-flex justify-content-end">
            </div>
        </div>
    </div>
    <div class="g-items">
        @php
            $key_features = old('key_features', $course->key_features ?? '[null]');
            $key_features = json_decode($key_features, true);
        @endphp
        @foreach ($key_features as $item)
            <div class="item mb-1" data-number="{{ $loop->iteration }}">
                <div class="row">
                    <div class="col-md-1">
                        {{ $loop->iteration }}
                    </div>
                    <div class="col-md-4">
                        <p class="save_show"></p>
                        <input type="number" name="ticket_no[]" class="form-control edit_show text_input" style="display: none" value="{{ $item['ticket_no'] ?? '' }}">
                    </div>
                    <div class="col-md-4">
                        <p class="save_show"></p>
                        <input type="number" name="price[]" class="form-control edit_show text_input" style="display: none" value="{{ $item['price'] ?? '' }}">
                    </div>
                    <div class="col-md-2 d-flex justify-content-end">
                        <span class="btn-icon btn btn-danger mr-1 btn-save-item edit_show" style="display: none">
                            Save
                        </span>
                        <span class="btn-icon btn btn-danger mr-1 btn-edit-item save_show">
                            Edit
                        </span>
                        <span class="btn-icon btn btn-danger btn-remove-item save_show">
                            Delete
                        </span>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="d-flex justify-content-end">
        <span class="btn btn-link btn-add-item">
            Add item
        </span>
    </div>
    <div class="g-more d-none">
        <div class="item mb-1" data-number="__number__">
            <div class="row">
                <div class="col-md-1">
                    __number__
                </div>
                <div class="col-md-4">
                    <p style="display: none" class="save_show"></p>
                    <input type="number" __name__="ticket_no[]" class="form-control edit_show text_input">
                </div>
                <div class="col-md-4">
                    <p style="display: none" class="save_show"></p>
                    <input type="number" __name__="price[]" class="form-control edit_show text_input">
                </div>
                <div class="col-md-2 d-flex justify-content-end">
                    <span class="btn-icon btn btn-danger mr-1 btn-save-item edit_show">
                        Save
                    </span>
                    <span class="btn-icon btn btn-danger mr-1 btn-edit-item save_show" style="display: none">
                        Edit
                    </span>
                    <span class="btn-icon btn btn-danger btn-remove-item save_show" style="display: none">
                        Delete
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<button type="submit" class="btn btn-success">Save Event</button>
