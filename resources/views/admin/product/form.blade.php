<x-admin.modal
    enctype="multipart/form-data"
    :title="isset($product) ? 'Update product' : 'Add New product'"
    :action="isset($product) ? route('admin.product.update', $product->id) : route('admin.product.store')"
    :button="isset($product) ? 'Update' : 'Submit'"
>
    @isset($product)
        @method('PUT')
    @endisset

    <x-admin.form-group label="name" placeholder="Enter product name" :value="$product->name ?? ''" required/>

        <x-admin.form-group
        label="file"
        type="file"
        accept=""
    />

</x-admin.modal>


