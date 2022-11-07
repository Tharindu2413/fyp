@csrf
<div>
    <div class="grid grid-cols-6 gap-6">
        {{-- Hospital Name --}}
        <div class="col-span-6 sm:col-span-3">
            <label for="bldstk_hospital" class="label">Hospital ID</label>
            <input type="text" name="bldstk_hospital" id="bldstk_hospital" disabled value="{{ $hospital->id }}" class="w-full max-w-xs input input-bordered">
        </div>
        {{-- Event Name --}}
        <div class="col-span-6 sm:col-span-3">
            <label class="label" for="bldstk_event">
                <span class="label-text">Event</span>
            </label>
            <select class="w-full max-w-xs select select-success" id="bldstk_event">
                <option disabled selected>Select the Event</option>
                @foreach ($events['data'] as $event)
                    <option value="{{ $event->id }}">{{ $event->name }}</option>
                @endforeach
            </select>
        </div>
        {{-- Blood Category --}}
        <div class="col-span-6 sm:col-span-3">
            <label class="label" for="bldstk_group">
                <span class="label-text">Blood Group</span>
            </label>
            <select class="w-full max-w-xs select select-error" id="bldstk_group">
                <option disabled selected>Select the Blood Group</option>
                @foreach ($bldtypes['data'] as $bldtype)
                    <option value="{{ $bldtype->id }}">{{ $bldtype->bloodtype_name }}</option>
                @endforeach
            </select>
        </div>
        {{-- Blood Source --}}
        <div class="col-span-6 sm:col-span-3">
            <label for="bldstk_source" class="label">Blood Source</label>
            <input type="text" name="bldstk_source" id="bldstk_source"
                value="{{ old('bloodstock_source') }} @isset($bloodstock){{ $bloodstock->bloodstock_source }} @endisset"
                class="w-full max-w-xs input input-bordered">
        </div>
        {{-- Blood Count --}}
        <div class="col-span-6 sm:col-span-3">
            <label for="bldstk_count" class="label">Blood Count</label>
            <input type="text" name="bldstk_count" id="bldstk_count"
                value="{{ old('bloodstock_count') }} @isset($bloodstock){{ $bloodstock->bloodstock_count }} @endisset"
                class="w-full max-w-xs input input-bordered">
        </div>

    </div>
</div>

{{-- Form Submit --}}
<div class="px-4 py-3 mt-6 text-right bg-gray-50 sm:px-6 rounded-box">
    <button type="submit"
        class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">

        @isset($create)
            Add BloodStock
        @else
            Edit BloodStock
        @endisset

    </button>
</div>
