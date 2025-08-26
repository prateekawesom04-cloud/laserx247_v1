<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Wallet</title>

  <!-- ✅ Common + Wallet-specific CSS -->
  <!-- Custom CSS file link -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">   
    <!-- Include head file -->
    @include('head')
</head>
<body>

  <div class="wallet-main-container bg-white rounded shadow">
    <!-- Header -->
    <div class="wallet-header text-white p-3 d-flex justify-content-between align-items-center rounded-top">
      <button class="wallet-back-btn text-white px-2 py-1 rounded" style="font-size: 10px;">BACK</button>
      <div class="wallet-balance-info px-2 py-1 rounded-pill" style="font-size: 10px;">Min: 100 Max: 50000</div>
    </div>

    <!-- Wallet Section -->
    <div class="p-3">
      <h6 class="fw-semibold text-dark mb-3" style="font-size: 13px;">Enter Deposit Amount</h6>

      <input type="number" class="form-control mb-3" id="walletAmount" placeholder="Enter amount..." min="100" max="50000" style="font-size: 12px;" />

      <div class="row g-2 mb-3">
        <div class="col-6"><button class="wallet-amount-btn btn text-white w-100" data-amount="300" style="font-size: 12px;">300</button></div>
        <div class="col-6"><button class="wallet-amount-btn btn text-white w-100" data-amount="500" style="font-size: 12px;">500</button></div>
        <div class="col-6"><button class="wallet-amount-btn btn text-white w-100" data-amount="1000" style="font-size: 12px;">1000</button></div>
        <div class="col-6"><button class="wallet-amount-btn btn text-white w-100" data-amount="2000" style="font-size: 12px;">2000</button></div>
      </div>

      <div class="row g-2 mb-3">
        <div class="col-6"><button class="wallet-btn-edit btn text-white w-100" id="walletEditStakeBtn" style="font-size: 11px;">📝 Edit Stake</button></div>
        <div class="col-6"><button class="wallet-btn-submit btn text-white w-100" style="font-size: 11px;">SUBMIT</button></div>
      </div>

      <!-- Table -->
      <div class="wallet-table-container rounded">
        <div class="wallet-table-wrapper">
          <div class="wallet-table-header text-white text-center py-0" style="font-size: 10px;">
            <div class="row g-1 mx-0">
              <div class="col">PAYMENT TYPE</div>
              <div class="col">AMOUNT</div>
              <div class="col">STATUS</div>
              <div class="col">DATE</div>
              <div class="col">PAYMENT METHOD</div>
              <div class="col">TRANSACTION NO</div>
              <div class="col">UTR NO</div>
              <div class="col">REASON</div>
            </div>
          </div>
          <div class="wallet-table-content">
            <div class="text-center py-3 text-muted fst-italic" style="font-size: 11px;">No data found!</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 🟦 Modal -->
  <div id="walletEditModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); justify-content:center; align-items:center; z-index:9999;">
    <div style="background:white; padding:20px; border-radius:8px; max-width:350px; width:90%;">
      <h6 class="fw-semibold mb-3" style="font-size:14px;">Edit Stake Amount</h6>
      
      <input type="number" class="form-control mb-3" id="walletModalInputAmount" placeholder="Enter custom amount..." min="100" max="50000" style="font-size: 13px;" />

      <div class="row g-2 mb-3">
        <div class="col-6"><button class="btn btn-outline-secondary w-100 wallet-modal-amount-btn" data-modal-amount="300">300</button></div>
        <div class="col-6"><button class="btn btn-outline-secondary w-100 wallet-modal-amount-btn" data-modal-amount="500">500</button></div>
        <div class="col-6"><button class="btn btn-outline-secondary w-100 wallet-modal-amount-btn" data-modal-amount="1000">1000</button></div>
        <div class="col-6"><button class="btn btn-outline-secondary w-100 wallet-modal-amount-btn" data-modal-amount="2000">2000</button></div>
      </div>

      <div class="d-flex justify-content-between">
        <button class="btn btn-light w-50 me-2" id="walletCancelModalBtn">Cancel</button>
        <button class="btn btn-dark w-50" id="walletSaveModalBtn">Save</button>
      </div>
    </div>
  </div>
  <!-- ✅ Common + Wallet JS -->
@include('js')

</body>
</html>
