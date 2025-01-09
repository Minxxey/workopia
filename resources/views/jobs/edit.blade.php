<x-layout>
    <x-slot name="title">Edit Job</x-slot>
    <div
        class="bg-white mx-auto p-8 rounded-lg shadow-md w-full md:max-w-3xl"
    >
        <h2 class="text-4xl text-center font-bold mb-4">
            Edit Job Listing
        </h2>
        <form
            method="POST"
            action="{{route('jobs.update', $job->id)}}"
            enctype="multipart/form-data"
        >
            @csrf
            @method('PUT')
            <h2
                class="text-2xl font-bold mb-6 text-center text-gray-500"
            >
                Job Info
            </h2>

            <x-inputs.text id="title" name="title" label="Job Title" placeholder="Software Engineer" :value="old('title', $job->title)" />

            <x-inputs.textarea id="description" name="description" label="Job Description" placeholder=".." :value="old('description', $job->description)"></x-inputs.textarea>

            <x-inputs.text id="salary" name="salary" type="number" label="Annual Salary" placeholder="90000" :value="old('salary', $job->salary)"/>

            <x-inputs.textarea id="requirements" name="requirements" label="Requirements" :value="old('requirements', $job->requirements)" placeholder="Bachelor's degree in Computer Science"></x-inputs.textarea>

            <x-inputs.textarea id="benefits" name="benefits" label="Benefits" placeholder="Health insurance, 401k, paid time off" :value="old('benefits', $job->benefits)"></x-inputs.textarea>

            <x-inputs.text id="tags" name="tags" label="Tags (comma-separated)" :value="old('tags', $job->tags)" placeholder="development,coding,java,python" />

            <x-inputs.select id="job_type" name="job_type" label="Job Type" :value="old('job_type', $job->job_type)" :options="['Full-Time' => 'Full-Time', 'Part-Time' => 'Part-Time', 'Contract' => 'Contract', 'Temporary' => 'Temporary', 'Internship' => 'Internship', 'Volunteer' => 'Volunteer', 'On-Call' => 'On-Call']"></x-inputs.select>

            <x-inputs.select id="remote" name="remote" label="Remote" :value="old('remote', $job->remote)" :options="[0 => 'No', 1 => 'Yes']"></x-inputs.select>

            <x-inputs.text id="address" name="address" label="Address" :value="old('address', $job->address)" placeholder="123 Main St" />

            <x-inputs.text id="city" name="city" label="City" :value="old('city', $job->city)" placeholder="Albany" />

            <x-inputs.text id="state" name="state" label="State" :value="old('state', $job->state)" placeholder="NY" />

            <x-inputs.text id="zipcode" name="zipcode" label="ZIP Code" :value="old('zipcode', $job->zipcode)" placeholder="12201" />

            <h2
                class="text-2xl font-bold mb-6 text-center text-gray-500"
            >
                Company Info
            </h2>

            <x-inputs.text id="company_name" name="company_name" label="Company Name" :value="old('company_name', $job->company_name)" placeholder="Company name" />

            <x-inputs.textarea id="company_description" name="company_description" :value="old('company_description', $job->company_description)" label="Company Description" placeholder="Company Description"></x-inputs.textarea>

            <x-inputs.text id="company_website" type="url" name="company_website" :value="old('company_website', $job->company_website)" label="Company Website" placeholder="Enter website" />

            <x-inputs.text id="contact_phone" name="contact_phone" type="phone" label="Contact Phone" :value="old('contact_phone', $job->contact_phone)" placeholder="Enter phone" />

            <x-inputs.text id="contact_email" type="email" name="contact_email" label="Contact Email" :value="old('contact_email', $job->contact_email)" placeholder="Email where you want to receive applications" />

            <x-inputs.file id="company_logo" name="company_logo" :value="old('company_logo', $job->company_logo)" label="Company Logo"></x-inputs.file>

            <button
                type="submit"
                class="w-full bg-green-500 hover:bg-green-600 text-white px-4 py-2 my-3 rounded focus:outline-none"
            >
                Save
            </button>
        </form>
    </div>
</x-layout>
