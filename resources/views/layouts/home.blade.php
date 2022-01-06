<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="shortcut icon" href="img/jdr.ico" type="image/x-icon">
  <style>
    .text-green {
      color: #00ae4d !important
    }

    asd .text-green:hover {
      color: #00ae4d !important
    }

    .background-green {
      background: #00ae4d !important
    }

    .background-green:hover {
      background: #007b36 !important
    }

    .border-green {
      border: 1px solid #00ae4d !important
    }

    .border-lg-green {
      border: 2px solid #00ae4d !important
    }

    .border-xl-green {
      border: 3px solid #00ae4d !important
    }

    .text-green-dark {
      color: #3a7f45 !important
    }

    .text-green-dark:hover {
      color: #3a7f45 !important
    }

    .background-green-dark {
      background: #3a7f45 !important
    }

    .background-green-dark:hover {
      background: #2a5c32 !important
    }

    .border-green-dark {
      border: 1px solid #3a7f45 !important
    }

    .border-lg-green-dark {
      border: 2px solid #3a7f45 !important
    }

    .border-xl-green-dark {
      border: 3px solid #3a7f45 !important
    }

    .text-green-darker {
      color: #006744 !important
    }

    .text-green-darker:hover {
      color: #006744 !important
    }

    .background-green-darker {
      background: #006744 !important
    }

    .background-green-darker:hover {
      background: #003422 !important
    }

    .border-green-darker {
      border: 1px solid #006744 !important
    }

    .border-lg-green-darker {
      border: 2px solid #006744 !important
    }

    .border-xl-green-darker {
      border: 3px solid #006744 !important
    }

    .text-yellow {
      color: #ffcb04 !important
    }

    .text-yellow:hover {
      color: #ffcb04 !important
    }

    .background-yellow {
      background: #ffcb04 !important
    }

    .background-yellow:hover {
      background: #d0a500 !important
    }

    .border-yellow {
      border: 1px solid #ffcb04 !important
    }

    .border-lg-yellow {
      border: 2px solid #ffcb04 !important
    }

    .border-xl-yellow {
      border: 3px solid #ffcb04 !important
    }

    .text-orange {
      color: #fbad17 !important
    }

    .text-orange:hover {
      color: #fbad17 !important
    }

    .background-orange {
      background: #fbad17 !important
    }

    .background-orange:hover {
      background: #db9204 !important
    }

    .border-orange {
      border: 1px solid #fbad17 !important
    }

    .border-lg-orange {
      border: 2px solid #fbad17 !important
    }

    .border-xl-orange {
      border: 3px solid #fbad17 !important
    }

    .text-orange-dark {
      color: #f7931d !important
    }

    .text-orange-dark:hover {
      color: #f7931d !important
    }

    .background-orange-dark {
      background: #f7931d !important
    }

    .background-orange-dark:hover {
      background: #d97908 !important
    }

    .border-orange-dark {
      border: 1px solid #f7931d !important
    }

    .border-lg-orange-dark {
      border: 2px solid #f7931d !important
    }

    .border-xl-orange-dark {
      border: 3px solid #f7931d !important
    }

    .text-grey-lightest {
      color: #f5f7fa !important
    }

    .text-grey-lightest:hover {
      color: #f5f7fa !important
    }

    .background-grey-lightest {
      background: #f5f7fa !important
    }

    .background-grey-lightest:hover {
      background: #d3dce9 !important
    }

    .border-grey-lightest {
      border: 1px solid #f5f7fa !important
    }

    .border-lg-grey-lightest {
      border: 2px solid #f5f7fa !important
    }

    .border-xl-grey-lightest {
      border: 3px solid #f5f7fa !important
    }

    .text-grey-lighter {
      color: #c6d1e2 !important
    }

    .text-grey-lighter:hover {
      color: #c6d1e2 !important
    }

    .background-grey-lighter {
      background: #c6d1e2 !important
    }

    .background-grey-lighter:hover {
      background: #a4b6d1 !important
    }

    .border-grey-lighter {
      border: 1px solid #c6d1e2 !important
    }

    .border-lg-grey-lighter {
      border: 2px solid #c6d1e2 !important
    }

    .border-xl-grey-lighter {
      border: 3px solid #c6d1e2 !important
    }

    .text-grey-light {
      color: #8d97ad !important
    }

    .text-grey-light:hover {
      color: #8d97ad !important
    }

    .background-grey-light {
      background: #8d97ad !important
    }

    .background-grey-light:hover {
      background: #6f7c98 !important
    }

    .border-grey-light {
      border: 1px solid #8d97ad !important
    }

    .border-lg-grey-light {
      border: 2px solid #8d97ad !important
    }

    .border-xl-grey-light {
      border: 3px solid #8d97ad !important
    }

    .text-grey {
      color: #78828c !important
    }

    .text-grey:hover {
      color: #78828c !important
    }

    .background-grey {
      background: #78828c !important
    }

    .background-grey:hover {
      background: #606971 !important
    }

    .border-grey {
      border: 1px solid #78828c !important
    }

    .border-lg-grey {
      border: 2px solid #78828c !important
    }

    .border-xl-grey {
      border: 3px solid #78828c !important
    }

    .text-grey-dark {
      color: #677490 !important
    }

    .text-grey-dark:hover {
      color: #677490 !important
    }

    .background-grey-dark {
      background: #677490 !important
    }

    .background-grey-dark:hover {
      background: #525c72 !important
    }

    .border-grey-dark {
      border: 1px solid #677490 !important
    }

    .border-lg-grey-dark {
      border: 2px solid #677490 !important
    }

    .border-xl-grey-dark {
      border: 3px solid #677490 !important
    }

    .text-grey-darker {
      color: #3e4555 !important
    }

    .text-grey-darker:hover {
      color: #3e4555 !important
    }

    .background-grey-darker {
      background: #3e4555 !important
    }

    .background-grey-darker:hover {
      background: #282d38 !important
    }

    .border-grey-darker {
      border: 1px solid #3e4555 !important
    }

    .border-lg-grey-darker {
      border: 2px solid #3e4555 !important
    }

    .border-xl-grey-darker {
      border: 3px solid #3e4555 !important
    }

    .text-grey-darkest {
      color: #343a40 !important
    }

    .text-grey-darkest:hover {
      color: #343a40 !important
    }

    .background-grey-darkest {
      background: #343a40 !important
    }

    .background-grey-darkest:hover {
      background: #1d2124 !important
    }

    .border-grey-darkest {
      border: 1px solid #343a40 !important
    }

    .border-lg-grey-darkest {
      border: 2px solid #343a40 !important
    }

    .border-xl-grey-darkest {
      border: 3px solid #343a40 !important
    }

    .text-black {
      color: #282828 !important
    }

    .text-black:hover {
      color: #282828 !important
    }

    .background-black {
      background: #282828 !important
    }

    .background-black:hover {
      background: #0f0f0f !important
    }

    .border-black {
      border: 1px solid #282828 !important
    }

    .border-lg-black {
      border: 2px solid #282828 !important
    }

    .border-xl-black {
      border: 3px solid #282828 !important
    }

    .text-total-black {
      color: #000 !important
    }

    .text-total-black:hover {
      color: #000 !important
    }

    .background-total-black {
      background: #000 !important
    }

    .background-total-black:hover {
      background: #000 !important
    }

    .border-total-black {
      border: 1px solid #000 !important
    }

    .border-lg-total-black {
      border: 2px solid #000 !important
    }

    .border-xl-total-black {
      border: 3px solid #000 !important
    }

    .text-white-light {
      color: #f5f5f5 !important
    }

    .text-white-light:hover {
      color: #f5f5f5 !important
    }

    .background-white-light {
      background: #f5f5f5 !important
    }

    .background-white-light:hover {
      background: #dcdcdc !important
    }

    .border-white-light {
      border: 1px solid #f5f5f5 !important
    }

    .border-lg-white-light {
      border: 2px solid #f5f5f5 !important
    }

    .border-xl-white-light {
      border: 3px solid #f5f5f5 !important
    }

    .text-white-total {
      color: #fff !important
    }

    .text-white-total:hover {
      color: #fff !important
    }

    .background-white-total {
      background: #fff !important
    }

    .background-white-total:hover {
      background: #e6e6e6 !important
    }

    .border-white-total {
      border: 1px solid #fff !important
    }

    .border-lg-white-total {
      border: 2px solid #fff !important
    }

    .border-xl-white-total {
      border: 3px solid #fff !important
    }

    .text-email {
      color: #294e27 !important
    }

    .text-email:hover {
      color: #294e27 !important
    }

    .background-email {
      background: #294e27 !important
    }

    .background-email:hover {
      background: #172c16 !important
    }

    .border-email {
      border: 1px solid #294e27 !important
    }

    .border-lg-email {
      border: 2px solid #294e27 !important
    }

    .border-xl-email {
      border: 3px solid #294e27 !important
    }

    .text-tokopedia {
      color: #42b549 !important
    }

    .text-tokopedia:hover {
      color: #42b549 !important
    }

    .background-tokopedia {
      background: #42b549 !important
    }

    .background-tokopedia:hover {
      background: #34903a !important
    }

    .border-tokopedia {
      border: 1px solid #42b549 !important
    }

    .border-lg-tokopedia {
      border: 2px solid #42b549 !important
    }

    .border-xl-tokopedia {
      border: 3px solid #42b549 !important
    }

    .text-bukalapak {
      color: #d71149 !important
    }

    .text-bukalapak:hover {
      color: #d71149 !important
    }

    .background-bukalapak {
      background: #d71149 !important
    }

    .background-bukalapak:hover {
      background: #a80d39 !important
    }

    .border-bukalapak {
      border: 1px solid #d71149 !important
    }

    .border-lg-bukalapak {
      border: 2px solid #d71149 !important
    }

    .border-xl-bukalapak {
      border: 3px solid #d71149 !important
    }

    .text-shopee {
      color: #fa5230 !important
    }

    .text-shopee:hover {
      color: #fa5230 !important
    }

    .background-shopee {
      background: #fa5230 !important
    }

    .background-shopee:hover {
      background: #f12d06 !important
    }

    .border-shopee {
      border: 1px solid #fa5230 !important
    }

    .border-lg-shopee {
      border: 2px solid #fa5230 !important
    }

    .border-xl-shopee {
      border: 3px solid #fa5230 !important
    }

    .text-red-1 {
      color: #faa !important
    }

    .text-red-1:hover {
      color: #faa !important
    }

    .background-red-1 {
      background: #faa !important
    }

    .background-red-1:hover {
      background: #f77 !important
    }

    .border-red-1 {
      border: 1px solid #faa !important
    }

    .border-lg-red-1 {
      border: 2px solid #faa !important
    }

    .border-xl-red-1 {
      border: 3px solid #faa !important
    }

    .text-red-2 {
      color: #c7004c !important
    }

    .text-red-2:hover {
      color: #c7004c !important
    }

    .background-red-2 {
      background: #c7004c !important
    }

    .background-red-2:hover {
      background: #940039 !important
    }

    .border-red-2 {
      border: 1px solid #c7004c !important
    }

    .border-lg-red-2 {
      border: 2px solid #c7004c !important
    }

    .border-xl-red-2 {
      border: 3px solid #c7004c !important
    }

    .text-red-3 {
      color: #8f1537 !important
    }

    .text-red-3:hover {
      color: #8f1537 !important
    }

    .background-red-3 {
      background: #8f1537 !important
    }

    .background-red-3:hover {
      background: #630e26 !important
    }

    .border-red-3 {
      border: 1px solid #8f1537 !important
    }

    .border-lg-red-3 {
      border: 2px solid #8f1537 !important
    }

    .border-xl-red-3 {
      border: 3px solid #8f1537 !important
    }

    .text-red-4 {
      color: #fd2e2e !important
    }

    .text-red-4:hover {
      color: #fd2e2e !important
    }

    .background-red-4 {
      background: #fd2e2e !important
    }

    .background-red-4:hover {
      background: #f60202 !important
    }

    .border-red-4 {
      border: 1px solid #fd2e2e !important
    }

    .border-lg-red-4 {
      border: 2px solid #fd2e2e !important
    }

    .border-xl-red-4 {
      border: 3px solid #fd2e2e !important
    }

    .text-red-5 {
      color: #c72c41 !important
    }

    .text-red-5:hover {
      color: #c72c41 !important
    }

    .background-red-5 {
      background: #c72c41 !important
    }

    .background-red-5:hover {
      background: #9d2333 !important
    }

    .border-red-5 {
      border: 1px solid #c72c41 !important
    }

    .border-lg-red-5 {
      border: 2px solid #c72c41 !important
    }

    .border-xl-red-5 {
      border: 3px solid #c72c41 !important
    }

    .text-red-6 {
      color: #cf1b1b !important
    }

    .text-red-6:hover {
      color: #cf1b1b !important
    }

    .background-red-6 {
      background: #cf1b1b !important
    }

    .background-red-6:hover {
      background: #a21515 !important
    }

    .border-red-6 {
      border: 1px solid #cf1b1b !important
    }

    .border-lg-red-6 {
      border: 2px solid #cf1b1b !important
    }

    .border-xl-red-6 {
      border: 3px solid #cf1b1b !important
    }

    .text-blue-1 {
      color: #ceddef !important
    }

    .text-blue-1:hover {
      color: #ceddef !important
    }

    .background-blue-1 {
      background: #ceddef !important
    }

    .background-blue-1:hover {
      background: #a8c2e2 !important
    }

    .border-blue-1 {
      border: 1px solid #ceddef !important
    }

    .border-lg-blue-1 {
      border: 2px solid #ceddef !important
    }

    .border-xl-blue-1 {
      border: 3px solid #ceddef !important
    }

    .text-blue-2 {
      color: #5893d4 !important
    }

    .text-blue-2:hover {
      color: #5893d4 !important
    }

    .background-blue-2 {
      background: #5893d4 !important
    }

    .background-blue-2:hover {
      background: #3379c6 !important
    }

    .border-blue-2 {
      border: 1px solid #5893d4 !important
    }

    .border-lg-blue-2 {
      border: 2px solid #5893d4 !important
    }

    .border-xl-blue-2 {
      border: 3px solid #5893d4 !important
    }

    .text-blue-3 {
      color: #1f3c88 !important
    }

    .text-blue-3:hover {
      color: #1f3c88 !important
    }

    .background-blue-3 {
      background: #1f3c88 !important
    }

    .background-blue-3:hover {
      background: #162a5e !important
    }

    .border-blue-3 {
      border: 1px solid #1f3c88 !important
    }

    .border-lg-blue-3 {
      border: 2px solid #1f3c88 !important
    }

    .border-xl-blue-3 {
      border: 3px solid #1f3c88 !important
    }

    .text-blue-4 {
      color: #070d59 !important
    }

    .text-blue-4:hover {
      color: #070d59 !important
    }

    .background-blue-4 {
      background: #070d59 !important
    }

    .background-blue-4:hover {
      background: #03062a !important
    }

    .border-blue-4 {
      border: 1px solid #070d59 !important
    }

    .border-lg-blue-4 {
      border: 2px solid #070d59 !important
    }

    .border-xl-blue-4 {
      border: 3px solid #070d59 !important
    }

    .text-blue-5 {
      color: #366ed8 !important
    }

    .text-blue-5:hover {
      color: #366ed8 !important
    }

    .background-blue-5 {
      background: #366ed8 !important
    }

    .background-blue-5:hover {
      background: #2457b7 !important
    }

    .border-blue-5 {
      border: 1px solid #366ed8 !important
    }

    .border-lg-blue-5 {
      border: 2px solid #366ed8 !important
    }

    .border-xl-blue-5 {
      border: 3px solid #366ed8 !important
    }

    .text-blue-6 {
      color: #064acb !important
    }

    .text-blue-6:hover {
      color: #064acb !important
    }

    .background-blue-6 {
      background: #064acb !important
    }

    .background-blue-6:hover {
      background: #053899 !important
    }

    .border-blue-6 {
      border: 1px solid #064acb !important
    }

    .border-lg-blue-6 {
      border: 2px solid #064acb !important
    }

    .border-xl-blue-6 {
      border: 3px solid #064acb !important
    }

    .text-violet-1 {
      color: #7b6cf6 !important
    }

    .text-violet-1:hover {
      color: #7b6cf6 !important
    }

    .background-violet-1 {
      background: #7b6cf6 !important
    }

    .background-violet-1:hover {
      background: #503cf3 !important
    }

    .border-violet-1 {
      border: 1px solid #7b6cf6 !important
    }

    .border-lg-violet-1 {
      border: 2px solid #7b6cf6 !important
    }

    .border-xl-violet-1 {
      border: 3px solid #7b6cf6 !important
    }

    .text-violet-2 {
      color: #5432d3 !important
    }

    .text-violet-2:hover {
      color: #5432d3 !important
    }

    .background-violet-2 {
      background: #5432d3 !important
    }

    .background-violet-2:hover {
      background: #4225ad !important
    }

    .border-violet-2 {
      border: 1px solid #5432d3 !important
    }

    .border-lg-violet-2 {
      border: 2px solid #5432d3 !important
    }

    .border-xl-violet-2 {
      border: 3px solid #5432d3 !important
    }

    .text-violet-3 {
      color: #241e92 !important
    }

    .text-violet-3:hover {
      color: #241e92 !important
    }

    .background-violet-3 {
      background: #241e92 !important
    }

    .background-violet-3:hover {
      background: #1a1568 !important
    }

    .border-violet-3 {
      border: 1px solid #241e92 !important
    }

    .border-lg-violet-3 {
      border: 2px solid #241e92 !important
    }

    .border-xl-violet-3 {
      border: 3px solid #241e92 !important
    }

    .text-green-1 {
      color: #a7ff83 !important
    }

    .text-green-1:hover {
      color: #a7ff83 !important
    }

    .background-green-1 {
      background: #a7ff83 !important
    }

    .background-green-1:hover {
      background: #83ff50 !important
    }

    .border-green-1 {
      border: 1px solid #a7ff83 !important
    }

    .border-lg-green-1 {
      border: 2px solid #a7ff83 !important
    }

    .border-xl-green-1 {
      border: 3px solid #a7ff83 !important
    }

    .text-green-2 {
      color: #17b978 !important
    }

    .text-green-2:hover {
      color: #17b978 !important
    }

    .background-green-2 {
      background: #17b978 !important
    }

    .background-green-2:hover {
      background: #118c5b !important
    }

    .border-green-2 {
      border: 1px solid #17b978 !important
    }

    .border-lg-green-2 {
      border: 2px solid #17b978 !important
    }

    .border-xl-green-2 {
      border: 3px solid #17b978 !important
    }

    .text-green-3 {
      color: #086972 !important
    }

    .text-green-3:hover {
      color: #086972 !important
    }

    .background-green-3 {
      background: #086972 !important
    }

    .background-green-3:hover {
      background: #053d42 !important
    }

    .border-green-3 {
      border: 1px solid #086972 !important
    }

    .border-lg-green-3 {
      border: 2px solid #086972 !important
    }

    .border-xl-green-3 {
      border: 3px solid #086972 !important
    }

    .text-teal-1 {
      color: #09c6ab !important
    }

    .text-teal-1:hover {
      color: #09c6ab !important
    }

    .background-teal-1 {
      background: #09c6ab !important
    }

    .background-teal-1:hover {
      background: #079581 !important
    }

    .border-teal-1 {
      border: 1px solid #09c6ab !important
    }

    .border-lg-teal-1 {
      border: 2px solid #09c6ab !important
    }

    .border-xl-teal-1 {
      border: 3px solid #09c6ab !important
    }

    .text-teal-2 {
      color: #068888 !important
    }

    .text-teal-2:hover {
      color: #068888 !important
    }

    .background-teal-2 {
      background: #068888 !important
    }

    .background-teal-2:hover {
      background: #045757 !important
    }

    .border-teal-2 {
      border: 1px solid #068888 !important
    }

    .border-lg-teal-2 {
      border: 2px solid #068888 !important
    }

    .border-xl-teal-2 {
      border: 3px solid #068888 !important
    }

    .text-teal-3 {
      color: #02556d !important
    }

    .text-teal-3:hover {
      color: #02556d !important
    }

    .background-teal-3 {
      background: #02556d !important
    }

    .background-teal-3:hover {
      background: #012e3b !important
    }

    .border-teal-3 {
      border: 1px solid #02556d !important
    }

    .border-lg-teal-3 {
      border: 2px solid #02556d !important
    }

    .border-xl-teal-3 {
      border: 3px solid #02556d !important
    }

    .text-brown-1 {
      color: #a96851 !important
    }

    .text-brown-1:hover {
      color: #a96851 !important
    }

    .background-brown-1 {
      background: #a96851 !important
    }

    .background-brown-1:hover {
      background: #875340 !important
    }

    .border-brown-1 {
      border: 1px solid #a96851 !important
    }

    .border-lg-brown-1 {
      border: 2px solid #a96851 !important
    }

    .border-xl-brown-1 {
      border: 3px solid #a96851 !important
    }

    .text-brown-2 {
      color: #915b4a !important
    }

    .text-brown-2:hover {
      color: #915b4a !important
    }

    .background-brown-2 {
      background: #915b4a !important
    }

    .background-brown-2:hover {
      background: #6f4639 !important
    }

    .border-brown-2 {
      border: 1px solid #915b4a !important
    }

    .border-lg-brown-2 {
      border: 2px solid #915b4a !important
    }

    .border-xl-brown-2 {
      border: 3px solid #915b4a !important
    }

    .text-brown-3 {
      color: #5c4d4d !important
    }

    .text-brown-3:hover {
      color: #5c4d4d !important
    }

    .background-brown-3 {
      background: #5c4d4d !important
    }

    .background-brown-3:hover {
      background: #403636 !important
    }

    .border-brown-3 {
      border: 1px solid #5c4d4d !important
    }

    .border-lg-brown-3 {
      border: 2px solid #5c4d4d !important
    }

    .border-xl-brown-3 {
      border: 3px solid #5c4d4d !important
    }

    .text-brown-4 {
      color: #cd9d77 !important
    }

    .text-brown-4:hover {
      color: #cd9d77 !important
    }

    .background-brown-4 {
      background: #cd9d77 !important
    }

    .background-brown-4:hover {
      background: #bf8252 !important
    }

    .border-brown-4 {
      border: 1px solid #cd9d77 !important
    }

    .border-lg-brown-4 {
      border: 2px solid #cd9d77 !important
    }

    .border-xl-brown-4 {
      border: 3px solid #cd9d77 !important
    }

    .text-brown-5 {
      color: #b2704e !important
    }

    .text-brown-5:hover {
      color: #b2704e !important
    }

    .background-brown-5 {
      background: #b2704e !important
    }

    .background-brown-5:hover {
      background: #8f5a3e !important
    }

    .border-brown-5 {
      border: 1px solid #b2704e !important
    }

    .border-lg-brown-5 {
      border: 2px solid #b2704e !important
    }

    .border-xl-brown-5 {
      border: 3px solid #b2704e !important
    }

    .text-brown-6 {
      color: #894949 !important
    }

    .text-brown-6:hover {
      color: #894949 !important
    }

    .background-brown-6 {
      background: #894949 !important
    }

    .background-brown-6:hover {
      background: #683737 !important
    }

    .border-brown-6 {
      border: 1px solid #894949 !important
    }

    .border-lg-brown-6 {
      border: 2px solid #894949 !important
    }

    .border-xl-brown-6 {
      border: 3px solid #894949 !important
    }
  </style>
  <title>@yield('title') | PT Jajar Dwi Raya</title>
</head>

<body class="scrollbar home">
  <main id="app" role="main">
    <div class="header14 pos-relative">
      <div class="h14-topbar">
        <div class="container">
          <nav class="navbar navbar-expand-lg font-14">
            <a href="#" class="navbar-brand hidden-lg-up">
              Top Menu
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#header14a"
              aria-controls="header14a" aria-expanded="false" aria-label="Toggle navigation">
              <span class="fas fa-ellipsis-h text-grey"></span>
            </button>
            <div class="navbar-collapse collapse" id="header14a">
              <ul class="navbar-nav horizontal">
                <li class="nav-item">
                  <a class="nav-link hover-fb" rel="noopener noreferrer" target="_blank"
                    href="https://www.facebook.com/PetrokimiaGresikOfficial/">
                    <i class="fab fa-facebook-square"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link hover-yt" rel="noopener noreferrer" target="_blank"
                    href="https://twitter.com/petrogresik">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link hover-linkedin" rel="noopener noreferrer" target="_blank"
                    href="https://www.linkedin.com/company/jajardwiraya/">
                    <i class="fab fa-linkedin"></i>
                  </a>
                </li>
              </ul>
              <ul class="language-selector navbar-nav horizontal ml-auto">
                <li class="nav-item"> <a class="hover:text-primary nav-link text-capitalize" href="/">
                    {{__('home') }}
                  </a>
                </li>
                {{-- <li class="nav-item"> <a class="hover:text-primary nav-link text-capitalize"
                    href="https://petrokimia-gresik.com/link/sitemap">Sitemap </a>
                </li> --}}
                @foreach (config('app.available_locales') as $locale)
                <li class="nav-item">
                  <a class="nav-link lift-up {{ app()->getLocale() == $locale ? 'active' : '' }}"
                    href="{{ route('localization.switch', $locale) }}">
                    <img width="30" alt="{{ $locale }}" class="lang shadow-sm hover:shadow"
                      src="https://petrokimia-gresik.com/images/{{ $locale }}.svg">
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="h14-infobar">
        <div class="container">
          <nav class="navbar navbar-expand-lg h14-info-bar">
            <a href="/" class="navbar-brand">
              <img src={{ asset("img/jdr.png") }} alt="PT.JDR Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#h14-info"
              aria-controls="h14-info" aria-expanded="false" aria-label="Toggle navigation">
              <span class="fas fa-ellipsis-v text-grey"></span>
            </button>
          </nav>
        </div>
      </div>
      <div class="h14-navbar">
        <div class="container">
          <div class="navbar navbar-expand-lg h14-nav">
            <a class="hidden-lg-up">{{ __('navigation') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header14"
              aria-controls="header14" aria-expanded="false" aria-label="Toggle navigation">
              <span class="fas fa-bars text-white"></span>
            </button>
            <div class="collapse navbar-collapse" id="header14">
              <div class="hover-dropdown">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false" href="#">{{ __('profile') }} <i class="fa fa-angle-down m-l-5"></i>
                    </a>
                    <div class="dropdown-menu b-none font-14 animated fadeIn">
                      <div class="row">
                        <div class="col-md-3 inside-bg hidden-md-down">
                          <div class="bg-img">
                            <img class="lazyload" alt="Menu2 profile"
                              src="https://storage.googleapis.com/pkg-portal-bucket/images/menu/_productThumb/menu2-profile.jpg"
                              data-src="https://storage.googleapis.com/pkg-portal-bucket/images/menu/menu2-profile.jpg">
                            <h3 class="text-white font-light text-capitalize">
                              {{__('profileP')}}</h3>
                          </div>
                        </div>
                        <div class="col-md-9">

                          <div class="card-columns">
                            <div class="card">
                              <ul class="list-style-none">
                                <li>
                                  <h6 class="text-capitalize">{{ __('profileP') }}
                                  </h6>
                                </li>
                                @foreach (Session::get('sidebar') as $d)

                                <li>
                                  <a href="/page/{{$d->slug}}" class="text-capitalize">
                                    {{$d->title}}
                                  </a>
                                </li>
                                @endforeach
                              </ul>
                            </div>
                            {{-- <div class="card">
                              <ul class="list-style-none">
                                <li>
                                  <h6 class="text-capitalize">
                                    Perizinan
                                  </h6>
                                </li>
                                <li>
                                  <a href="" class="text-capitalize">Persetujuan
                                    Impor</a>
                                </li>
                                <li>
                                  <a href="" class="text-capitalize">Izin Industri</a>
                                </li>
                                <li>
                                  <a href="" class="text-capitalize">IPAK</a>
                                </li>
                              </ul>
                            </div> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase" data-toggle="dropdown" aria-expanded="false"
                      aria-haspopup="true" href="#">KBLI <i class="fa fa-angle-down m-l-5"></i>
                    </a>
                    <div class="dropdown-menu b-none font-14 animated fadeIn">
                      <div class="row">
                        <div class="col-md-3 inside-bg hidden-md-down">
                          <div class="bg-img">
                            <img alt="Menu2 profile" class="lazyload loaded" src="{{ asset('img/kbli.jpg') }}">
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="card-columns-2">
                            <div class="card">
                              <ul class="list-style-none">
                                <li>
                                  <a href="#" class="text-capitalize"><strong>24101</strong> Industri Besi Dan Baja
                                    Dasar
                                    (Iron
                                    And Steel
                                    Making)</a>
                                </li>
                                <li>
                                  <a href="#" class="text-capitalize"><strong>24310</strong> Industri Pengecoran Besi
                                    Dan
                                    Baja</a>
                                </li>
                                <ul class="list-style-none">
                                  <li>
                                    <a href="" class="text-capitalize"><strong>46443</strong> Perdagangan Besar Kosmetik
                                      Untuk Manusia</a>
                                  </li>
                                </ul>
                            </div>
                            {{-- <div class="card">
                              <ul class="list-style-none">
                                <li>
                                  <a href="#" class="text-capitalize">Industri Pengecoran Besi Dan Baja</a>
                                </li>
                              </ul>
                            </div>
                            <div class="card">
                              <ul class="list-style-none">
                                <li>
                                  <a href="" class="text-capitalize">Perdagangan Besar Kosmetik Untuk Manusia</a>
                                </li>
                              </ul>
                            </div> --}}
                            <div class="card">
                              <ul class="list-style-none">
                                <li>
                                  <a href="" class="text-capitalize"><strong>46521</strong> Perdagangan Besar Suku
                                    Cadang
                                    Elektronik</a>
                                </li>
                                <li>
                                  <a href="" class="text-capitalize"><strong>46523</strong> Perdagangan Besar Peralatan
                                    Telekomunikasi</a>
                                </li>
                                <li>
                                  <a href="" class="text-capitalize"><strong>46691</strong> Perdagangan Besar Alat
                                    Laboratorium, Alat Farmasi,
                                    Dan Alat Kedokteran Untuk Manusia</a>
                                </li>
                              </ul>
                            </div>
                            {{-- <div class="card">
                              <ul class="list-style-none">
                                <li>
                                  <a href="" class="text-capitalize">Perdagangan Besar Peralatan Telekomunikasi</a>
                                </li>
                              </ul>
                            </div>
                            <div class="card">
                              <ul class="list-style-none">
                                <li>
                                  <a href="" class="text-capitalize">Perdagangan Besar Alat Laboratorium, Alat Farmasi,
                                    Dan Alat Kedokteran Untuk Manusia</a>
                                </li>
                              </ul>
                            </div> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase" data-toggle="dropdown" aria-expanded="false"
                      aria-haspopup="true" href="#">Program <i class="fa fa-angle-down m-l-5"></i>
                    </a>
                    <div class="dropdown-menu b-none font-14 animated fadeIn">
                      <div class="row">
                        <div class="col-md-3 inside-bg hidden-md-down">
                          <div class="bg-img">
                            <img alt="Menu2 profile" class="lazyload loaded" src="{{ asset('img/program.jpg') }}">
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="card-columns">
                            <div class="card">
                              <ul class="list-style-none">
                                <li>
                                  <a href="#" class="text-capitalize">Traderoad</a>
                                </li>
                              </ul>
                            </div>
                            <div class="card">
                              <ul class="list-style-none">
                                <li>
                                  <a href="#" class="text-capitalize">QRder</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  {{-- <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase" data-toggle="dropdown" aria-expanded="false"
                      aria-haspopup="true" href="#">Product
                      <i class="fa fa-angle-down m-l-5"></i>
                    </a>
                    <div class="dropdown-menu b-none font-14 animated fadeIn">
                      <div class="row">
                        <div class="col-md-3 inside-bg hidden-md-down">
                          <div class="bg-img">
                            <img alt="Menu2 profile" class="lazyload loaded" src="img/tes.jpg">
                            <h3 class="text-white font-light text-capitalize">
                              Product
                            </h3>
                          </div>
                        </div>
                        <div class="col-md-9">
                          <div class="card-columns">
                            <div class="card">
                              <ul class="list-style-none">
                                <li>
                                  <a href="#" class="text-capitalize">Indonesia</a>
                                </li>
                              </ul>
                            </div>
                            <div class="card">
                              <ul class="list-style-none">
                                <li>
                                  <a href="" class="text-capitalize">Merdeka1</a>
                                </li>
                              </ul>
                            </div>
                            <div class="card">
                              <ul class="list-style-none">
                                <li>
                                  <a href="" class="text-capitalize">Merdeka2</a>
                                </li>
                              </ul>
                            </div>
                            <div class="card">
                              <ul class="list-style-none">
                                <li>
                                  <a href="" class="text-capitalize">Merdeka3</a>
                                </li>
                              </ul>
                            </div>
                            <div class="card">
                              <ul class="list-style-none">
                                <li>
                                  <a href="" class="text-capitalize">Merdeka4</a>
                                </li>
                              </ul>
                            </div>
                            <div class="card">
                              <ul class="list-style-none">
                                <li>
                                  <a href="" class="text-capitalize">Merdeka5</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li> --}}
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @if (Route::is('page.*'))
    <div class="container py-5">
      <div class="row">
        @include('partials.sidebar')
        @yield('contentPage')
      </div>
    </div>
    @endif
    @yield('content')
    {{-- @yield('contentPage') --}}

    <footer id="footer" class="footer3 bg-dark font-14 p-t-20">
      <div class="f3-middle container">
        <div class="row">
          <div class="col-lg-3 col-md-6 m-b-30">
            <div>
              <a class="m-r-20" href="#">
                <img alt="Petro-dark-transp" class="lazyload logo"
                  data-src="https://storage.googleapis.com/pkg-portal-bucket/images/template/petro-dark-transp.png" />
              </a>
            </div>
            <div class="mt-3">
              <p>PT JAJAR DWI RAYA merupakan perusahaan Perdagangan Internasional yang berfokus dalam kegiatan ekonomi
                ekspor dan impor,
                sekaligus produsen dalam Industri Besi dan Baja yang memproduksi berbagai produk turunan besi baja untuk
                kebutuhan
                bisnis maupun kebutuhan industri. <br /></p>
            </div>
            <div class="social-media">
              <div class="round-social light">
                <a href="https://www.facebook.com/PetrokimiaGresikOfficial/" class="link hover-fb" target="_blank"><i
                    class="fab fa-facebook"></i></a>
                <a href="https://www.youtube.com/channel/UC2M0KWQ7_e3oCqnWL4urUVQ" class="link hover-yt"
                  target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://www.instagram.com/petrokimiagresik_official/" class="link hover-linkedin"
                  target="_blank"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 m-b-30">
            <h6 class="font-semibold text-white text-uppercase">Features</h6>
            <div class="m-t-20">
              <ul class="ps-0">
                <li class="m-b-10 font-semibold db"><a href="#">About</a></li>
                <li class="m-b-10 font-semibold db"><a href="#">Product</a></li>
                <li class="m-b-10 font-semibold db"><a href="#">Program</a></li>
                <li class="m-b-10 font-semibold db"><a href="#">Contact</a></li>
              </ul>
              {{-- <div class="m-b-10">
                <span class="font-semibold text-muted db">ALAMAT</span>
                <p>Jl. Jenderal Ahmad Yani - Gresik 61119</p>
              </div>
              <div class="m-b-10">
                <span class="font-semibold text-muted db">TELEPON</span>
                <p>031-3981811, 3982100, 3982200</p>
              </div>
              <div class="m-b-10">
                <span class="font-semibold text-muted db">FAX</span>
                <p>031-3981722, 3982272</p>
              </div>
              <div class="m-b-10">
                <span class="font-semibold text-muted db">EMAIL</span>
                <a href="mailto:pg@petrokimia-gresik.com">pg@petrokimia-gresik.com</a>
              </div> --}}
            </div>
          </div>
          <div class="col-lg-3 col-md-6 m-b-30">
            <h6 class="font-semibold text-white text-uppercase">Head Office</h6>
            <div class="m-t-20">
              <div class="m-b-10">
                <span class="font-semibold text-muted db">ALAMAT</span>
                <p>Jl. Tanah Abang III no.16 Jakarta 10160</p>
              </div>
              <div class="m-b-10">
                <span class="font-semibold text-muted db">TELEPON</span>
                <p>021-3446459, 3446645</p>
              </div>
              <div class="m-b-10">
                <span class="font-semibold text-muted db">FAX</span>
                <p>021-3841994</p>
              </div>
              <div class="m-b-10">
                <span class="font-semibold text-muted db">EMAIL</span>
                <a href="mailto:perjaka@petrokimia-gresik.com">perjaka@petrokimia-gresik.com</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 m-b-30">
            <h6 class="font-semibold text-white text-uppercase">Factory</h6>
            <div class="m-t-20">
              <div class="m-b-10">
                <span class="font-semibold text-muted db">TELEPON</span>
                <p>08001888777 (bebas pulsa)</p>
              </div>
              <div class="m-b-10">
                <span class="font-semibold text-muted db">SMS/WHATSAPP</span>
                <a
                  href="  https://api.whatsapp.com/send?phone=0811344774&amp;text=Halo Petrokimia Gresik, saya mau bertanya">0811344774</a>
              </div>
              <div class="m-b-10">
                <span class="font-semibold text-muted db">FAX</span>
                <p>031-3979976</p>
              </div>
              <div class="m-b-10">
                <span class="font-semibold text-muted db">EMAIL</span>
                <a href="mailto:konsumen@petrokimia-gresik.com">konsumen@petrokimia-gresik.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <footer class="f3-bottom-bar">
      <div class="container">
        <div class="d-flex justify-content-between">
          <div class="copyright m-t-10 m-b-10">
            <p>Hak Cipta © 2019 <a href="http://www.petrokimia-gresik.com/">PT Jajar Dwi Raya</a>.
              All Rights Reserved.
            </p>
          </div>
          {{-- <div class="text-center">
            <img class="lazyload mr-2" alt="Sucofindo 9001"
              data-src="https://storage.googleapis.com/pkg-portal-bucket/images/template/sucofindo-9001.png"
              height="60">
            <img class="lazyload mr-2" alt="Sucofindo 14001"
              data-src="https://storage.googleapis.com/pkg-portal-bucket/images/template/sucofindo-14001.png"
              height="60">
          </div> --}}
        </div>
      </div>
    </footer>
  </main>

  <script src="js/vendor.js"></script>
  <script src="js/app.js"></script>
  <script type="text/javascript">
    function slide() {
  const slideImage = document.querySelector(".slide-image");
  slideImage.dataset.src;
  }
  slide();
  </script>
</body>

</html>
