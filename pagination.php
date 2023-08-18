<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');

body {
  font-family: 'Inter', sans-serif;
  line-height: 1.7;
  font-size: 1.1rem;
  margin: 0;
  color: #27253d;
  background: #e6f3f8;
}

main {
  position: relative;
  padding: 1rem 1rem 3rem;
  min-height: calc(100vh - 4rem);
}

h1 {
  margin-top: 0;
}

.hidden {
  display: none !important;
}

.pagination-container {
  width: calc(100% - 2rem);
  display: flex;
  align-items: center;
  position: absolute;
  bottom: 0;
  padding: 1rem 0;
  justify-content: center;
}

.pagination-number,
.pagination-button{
  font-size: 1.1rem;
  background-color: transparent;
  border: none;
  margin: 0.25rem 0.25rem;
  cursor: pointer;
  height: 2.5rem;
  width: 2.5rem;
  border-radius: .2rem;
}

.pagination-number:hover,
.pagination-button:not(.disabled):hover {
  background: #fff;
}

.pagination-number.active {
  color: #fff;
  background: #0085b6;
}

footer {
  padding: 1em;
  text-align: center;
  background-color: #FFDFB9;
}

footer a {
  color: inherit;
  text-decoration: none;
}

footer .heart {
  color: #DC143C;
}
</style>
</head>
<body>
<main class="container">

  <h1>Pagination with Vanilla JavaScript</h1>

  <div class="row" id="paginated-list" data-current-page="1" aria-live="polite">
        <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B0B1GVQ67M&asins=B0B1GVQ67M&linkId=c214af60abbfb1324c1c99396e8a35d7&show_border=true&link_opens_in_new_window=true"></iframe></div>
        <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B07F5ZNBHG&asins=B07F5ZNBHG&linkId=7d08eb680f448cefcdc01a41ad1bc543&show_border=true&link_opens_in_new_window=true"></iframe></div>
        <!-- <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B08C96BG9H&asins=B08C96BG9H&linkId=44d636bebbccf1a04d0e14e879c68b79&show_border=true&link_opens_in_new_window=true"></iframe></div>   -->
        <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B09VSLNDLJ&asins=B09VSLNDLJ&linkId=ed5974b3427b910eb7626ce576fc82eb&show_border=true&link_opens_in_new_window=true"></iframe></div>
        <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B09Z9K12P2&asins=B09Z9K12P2&linkId=abe93dfcf093a471b9ae4f3b765736d5&show_border=true&link_opens_in_new_window=true"></iframe></div>
        <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B07F2YJRN2&asins=B07F2YJRN2&linkId=a1e77a97875eb417fcecbe95d32c1c28&show_border=true&link_opens_in_new_window=true"></iframe></div>
        <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B09NW4FN2R&asins=B09NW4FN2R&linkId=3fa0a3bec917eb4831621d9da7131604&show_border=true&link_opens_in_new_window=true"></iframe></div>
        <!-- <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B0B6228XBM&asins=B0B6228XBM&linkId=70b8cda937920515335ac3ffd74206f8&show_border=true&link_opens_in_new_window=true"></iframe></div> -->
        <!-- <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B09BXQ4HMB&asins=B09BXQ4HMB&linkId=ae78501ee9d91be3f72e787e216ce88d&show_border=true&link_opens_in_new_window=true"></iframe></div> -->
        <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B00FMWWN6U&asins=B00FMWWN6U&linkId=92d92dd06a8e640f3d3c640b437fac6a&show_border=true&link_opens_in_new_window=true"></iframe></div>
        <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B08BY8BZS4&asins=B08BY8BZS4&linkId=c2dcb4406a0b7a7b59d18461f0652273&show_border=true&link_opens_in_new_window=true"></iframe></div>
        <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B097B2HQ5R&asins=B097B2HQ5R&linkId=6497be67939f1db8c633570624fc684d&show_border=true&link_opens_in_new_window=true"></iframe></div>
        <!-- <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B09RMH9B6F&asins=B09RMH9B6F&linkId=dfcbbf8668fead14cb5abf14de26d71a&show_border=true&link_opens_in_new_window=true"></iframe></div> -->
        <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B09FHC7CPM&asins=B09FHC7CPM&linkId=a08143189346bb066d62fc96d53902ab&show_border=true&link_opens_in_new_window=true"></iframe></div>
        <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B09PKTYKGZ&asins=B09PKTYKGZ&linkId=a3cf0aa15b3eb2a06bfe3b5bc3696a3a&show_border=true&link_opens_in_new_window=true"></iframe></div>
        <div class="booster col-6 col-xs-6 col-sm-4 col-md-4 border border-primary d-flex align-items-center justify-content-center bg-light"><iframe sandbox="allow-popups allow-scripts allow-modals allow-forms allow-same-origin" style="width:120px;height:240px;" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=US&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=play2world-20&language=en_US&marketplace=amazon&region=US&placement=B0927D8S51&asins=B0927D8S51&linkId=d0ce3f3ea3161e84f8577ede0d19ef6a&show_border=true&link_opens_in_new_window=true"></iframe></div>
</div>
  <nav class="pagination-container">
    <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
      &lt;
    </button>

    <div id="pagination-numbers">

    </div>

    <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
      &gt;
    </button>
  </nav>
</main>
<footer>
    Pen by <a href="https://www.jemimaabu.com" target="_blank" rel="noopener">Jemima Abu</a> <span class="heart">&hearts;</span>
</footer>
<script>
const paginationNumbers = document.getElementById("pagination-numbers");
const paginatedList = document.getElementById("paginated-list");
const listItems = paginatedList.querySelectorAll(".booster");
const nextButton = document.getElementById("next-button");
const prevButton = document.getElementById("prev-button");

const paginationLimit = 6;
const pageCount = Math.ceil(listItems.length / paginationLimit);
let currentPage = 1;

const disableButton = (button) => {
  button.classList.add("disabled");
  button.setAttribute("disabled", true);
};

const enableButton = (button) => {
  button.classList.remove("disabled");
  button.removeAttribute("disabled");
};

const handlePageButtonsStatus = () => {
  if (currentPage === 1) {
    disableButton(prevButton);
  } else {
    enableButton(prevButton);
  }

  if (pageCount === currentPage) {
    disableButton(nextButton);
  } else {
    enableButton(nextButton);
  }
};

const handleActivePageNumber = () => {
  document.querySelectorAll(".pagination-number").forEach((button) => {
    button.classList.remove("active");
    const pageIndex = Number(button.getAttribute("page-index"));
    if (pageIndex == currentPage) {
      button.classList.add("active");
    }
  });
};

const appendPageNumber = (index) => {
  const pageNumber = document.createElement("button");
  pageNumber.className = "pagination-number";
  pageNumber.innerHTML = index;
  pageNumber.setAttribute("page-index", index);
  pageNumber.setAttribute("aria-label", "Page " + index);

  paginationNumbers.appendChild(pageNumber);
};

const getPaginationNumbers = () => {
  for (let i = 1; i <= pageCount; i++) {
    appendPageNumber(i);
  }
};

const setCurrentPage = (pageNum) => {
  currentPage = pageNum;

  handleActivePageNumber();
  handlePageButtonsStatus();
  
  const prevRange = (pageNum - 1) * paginationLimit;
  const currRange = pageNum * paginationLimit;

  listItems.forEach((item, index) => {
    item.classList.add("hidden");
    if (index >= prevRange && index < currRange) {
      item.classList.remove("hidden");
    }
  });
};

window.addEventListener("load", () => {
  getPaginationNumbers();
  setCurrentPage(1);

  prevButton.addEventListener("click", () => {
    setCurrentPage(currentPage - 1);
  });

  nextButton.addEventListener("click", () => {
    setCurrentPage(currentPage + 1);
  });

  document.querySelectorAll(".pagination-number").forEach((button) => {
    const pageIndex = Number(button.getAttribute("page-index"));

    if (pageIndex) {
      button.addEventListener("click", () => {
        setCurrentPage(pageIndex);
      });
    }
  });
});
</script>
</body>
</html>
