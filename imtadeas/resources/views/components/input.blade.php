<div class="flex flex-col gap-2">
    <label for="{{$attributes['name']}}" class="text-sm text-zinc-800 font-semibold">{{$attributes['label']}}</label>
    <input value="{{ old($attributes['name']) }}" type="{{$attributes['type']}}" name="{{$attributes['name']}}" class="bg-zinc-100 border p-2 focus:outline-hidden focus:border-2 focus:border-gray-400 rounded-lg">
    @error($attributes['name'])
    <div class="text-red-500 text-sm">{{ $message }}</div>
    @enderror
</div>