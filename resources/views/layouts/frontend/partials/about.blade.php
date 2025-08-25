    <!-- About Section -->
      <section class="tf-section2 flat-about home2" style="background:white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-style">
                            <div class="wrap-img">
                                  <section class="tf-section flat-shop-sidebar page style-left">
                                   <div class="flat-vegetables">
                                    <div class="wrap-vegetables">
                                        <div class="flex box box-hv">
                                            <div class="image">
                                                    <img src="{{ uploaded_file($aboutus->image) }}" alt="images">
                                            </div>
                                            <div class="content">
                                                <div class="titles title-30 fw-6 link-style-1">
                                                    {{ $aboutus->name }}
                                                </div>
                                                <div class="money">
                                                 <span class="two">{{ $aboutus->designation }}</span>
                                                </div>

                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </section>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="wrap-about">
                                <div class="heading-section">
                                    <h2>About Us</h2>
                                    {{-- <h4>We Believe in Working
                                        Accredited Farmers</h4> --}}
                                    <p>
                                        {!! $aboutus->about_us !!}
                                    </p>
                                </div>


                                <div class="buttons">
                                    <a href="{{ route('about.index') }}" class="blob-btn btn-style">
                                        Read more
                                        <span class="blob-btn__inner">
                                        <span class="blob-btn__blobs">
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                            <span class="blob-btn__blob"></span>
                                        </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<script>

const contentEl = document.getElementById("content");
const shortContentEl = document.getElementById("shortContent");
const readMoreBtn = document.getElementById("readMoreBtn");

const fullHTML = contentEl.innerHTML;
const fullText = contentEl.innerText.trim();
const charLimit = 790;
let isExpanded = false;

// Set up initial display
if (fullText.length > charLimit) {
  contentEl.style.display = "none";
  shortContentEl.innerText = fullText.slice(0, charLimit) + "...";
} else {
  readMoreBtn.style.display = "none"; // Hide button if text is short
}

function toggleText() {
  if (!isExpanded) {
    shortContentEl.style.display = "none";
    contentEl.style.display = "block";
    readMoreBtn.innerText = "Read Less";
  } else {
    shortContentEl.style.display = "block";
    contentEl.style.display = "none";
    readMoreBtn.innerText = "Read More";
  }
  isExpanded = !isExpanded;
}

</script>
