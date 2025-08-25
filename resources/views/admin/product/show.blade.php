
<x-admin.modal
    enctype="multipart/form-data"
    title="Show Product">

    <div class="cards">

        {{-- <img class="card-img-top img-fluid" src="assets/images/small/img-2.jpg" alt="Card image cap"> --}}
        <div class="card-body">
            <h4 class="mt-0 card-title font-size-16">{{ $product->name }}</h4>
            <h4 class="mt-0 card-title font-size-16">{{ $product->brand }}</h4>

        </div>
        @if($product->image != "")
        <div class="row ">
            <div class="col-xl-6 col-6">
                <div class="cards">
                    <p class="mb-2 email-attachment-title">File</p>

                    <img class="card-img-top img-fluid" src="{{ uploaded_file($product->image) }}" alt="Card image cap">
                    </span>
                    <div class="py-2 text-center"></div>
                </div>
                </div>
            </div>
        </div>
    @endif
    </div>

</x-admin.modal>
