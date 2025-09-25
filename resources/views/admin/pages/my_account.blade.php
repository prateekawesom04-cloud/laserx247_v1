@extends('admin.master')
@section('body')
    <!-- Responsive Account Page -->
    <div class="container-fluid p-2 p-md-4 text-white bg-dark">
        <div class="row g-2 g-md-3">

            <!-- Sidebar -->
            <div class="col-12 col-lg-3">
                <div class="card shadow-sm h-100 bg-dark text-white">
                    <!-- <div class="card-header bg-primary text-white fw-bold">
                        My Account
                    </div> -->

                    <!-- Desktop Navigation -->
                    <ul class="list-group list-group-flush mb-0 d-none d-lg-block bg-dark">
                        <li>
                            <a href="javascript:void(0);"
                                class="list-group-item list-group-item-action sidebar-link active bg-dark text-white"
                                data-target="profile">Agent Profile</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"
                                class="list-group-item list-group-item-action sidebar-link bg-dark text-white"
                                data-target="statement">Account Statement</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"
                                class="list-group-item list-group-item-action sidebar-link bg-dark text-white"
                                data-target="activity">Activity Log</a>
                        </li>
                    </ul>

                    <!-- Mobile/Tablet Navigation -->
                    <div class="d-block d-lg-none p-2 bg-dark">
                        <div class="d-flex gap-1">
                            <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-link active flex-fill"
                                data-target="profile">Profile</a>
                            <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-link flex-fill"
                                data-target="statement">Statement</a>
                            <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-link flex-fill"
                                data-target="activity">Activity</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Area -->
            <div class="col-12 col-lg-9">

                <!-- Profile Section -->
                <div id="profile-section">
                    <div class="card shadow-sm bg-dark text-white">
                        <div class="card-header bg-primary text-white fw-bold">Account Details</div>
                        <div class="card-body p-0">
                            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
                                <div class="fw-bold">User Id</div>
                                <div class="text-break">{{$user->user_uid}}</div>
                            </div>
                            <!-- <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
                                <div class="fw-bold">Commission</div>
                                <div>{{$user->commission_amount}}</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
                                <div class="fw-bold">Rolling Commission</div>
                                <div class="d-flex gap-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#rollingCommissionModal"
                                        title="Edit">
                                        <i class="fas fa-pen-to-square text-primary"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#agentrollingCommissionModal"
                                        title="View">
                                        <i class="fas fa-eye text-primary"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
                                <div class="fw-bold">Agent Rolling Commission</div>
                                <div>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#agentrollingCommissionModal"
                                        title="View">
                                        <i class="fas fa-eye text-primary"></i>
                                    </a>
                                </div>
                            </div> -->
                            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
                                <div class="fw-bold">Currency</div>
                                <div>INR</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
                                <div class="fw-bold">Partnership</div>
                                <div>{{$user->partnership_percentage}}</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
                                <div class="fw-bold">Mobile Number</div>
                                <div>{{$user->phone}}</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center px-3 py-2">
                                <div class="fw-bold">Password</div>
                                <div class="d-flex align-items-center gap-2">
                                    <span>*********</span>
                                    <i class="fas fa-pen-to-square text-primary" style="cursor: pointer;"
                                        title="Edit Password" data-bs-toggle="modal"
                                        data-bs-target="#changePasswordModal"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Statement Section -->
                <div id="statement-section" style="display: none;">
                    <div class="card shadow-sm bg-dark text-white">
                        <div class="card-header bg-primary text-white fw-bold">Account Statement</div>
                        <div class="card-body">

                            <div class="row mb-3 g-2">
                                <div class="col-12 col-md-4">
                                    <form data-m_key="transactions" data-search_data_key="payment_type" >
                                        <input type="hidden" name="user_uid" value="{{$user->user_uid}}">
                                        <select name="payment_type" class="form-control bg-dark text-white border-secondary payment_type">
                                            <option value="0">Deposit</option>
                                            <option value="1">Withdrawal</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="col-6 col-md-3">

                                    <input type="text" id="fromDate" name="fromDate" class="form-control"
                                        value="2025-09-08T00:00" />
                                </div>
                                <div class="col-6 col-md-3">

                                    <input type="text" id="toDate" name="toDate" class="form-control"
                                        value="2025-09-15T00:00" />
                                </div>
                                <div class="col-12 col-md-2">
                                    <button class="btn btn-primary w-100">Get Statement</button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-dark mb-0">
                                    <thead class="table-primary">
                                        <tr>
                                            <th class="text-nowrap">Date/Time</th>
                                            <th class="text-nowrap">Type</th>
                                            <th class="text-nowrap">Balance</th>
                                            <th class="text-nowrap">Remarks</th>
                                            <!-- <th class="text-nowrap">From/To</th> -->
                                        </tr>
                                    </thead>
                                    <tbody class="transaction_statement">
                                        <tr>
                                            <td colspan="6" class="text-center py-4">No data!</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Activity Log Section -->
                <div id="activity-section" style="display: none;">
                    <div class="card shadow-sm bg-dark text-white">
                        <div class="card-header bg-primary text-white fw-bold">Activity Log</div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-dark mb-0">
                                    <thead class="table-primary">
                                        <tr>
                                            <th class="text-nowrap">Login Date & Time</th>
                                            <th class="text-nowrap">Login Status</th>
                                            <th class="text-nowrap">City/State/Country</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($activity as $activity)
                                        <tr>
                                            <td class="text-nowrap">{{$activity->created_at}}</td>
                                            <td class="text-success fw-bold text-nowrap">{{$activity->status}}</td>
                                            <td>{{$activity->ip}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

<!-- JS to toggle sections -->
 @section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('.sidebar-link');
        const sections = {
            profile: document.getElementById('profile-section'),
            statement: document.getElementById('statement-section'),
            activity: document.getElementById('activity-section'),
        };

        links.forEach(link => {
            link.addEventListener('click', function() {
                // Remove active class from all links
                links.forEach(l => l.classList.remove('active'));
                // Add active class to clicked link
                this.classList.add('active');

                // Get target section
                const target = this.getAttribute('data-target');

                // Hide all sections and show target section
                for (const key in sections) {
                    sections[key].style.display = (key === target) ? 'block' : 'none';
                }
            });
        });
    });

    
    $('a.changePassword').click(function(){
        let oldPassword = $('input[name=oldPassword]').val();
        let newPassword = $('input[name=newPassword]').val();
        let confirmPassword = $('input[name=confirmPassword]').val();
        let data = {
            oldPassword: oldPassword,
            newPassword: newPassword,
            confirmPassword: confirmPassword
        };
        
        if (oldPassword.length < 6) {
            alert('Please enter correct password');
            return false;
        } else if (newPassword.length < 6) {
            alert('Please enter new strong password');
            return false;
        } else if (newPassword != confirmPassword) {
            alert('please confirm correct password');
            return false;
        } else {
            callApi('post', 'changePassword', data, changePassword);
        }

    });

    function changePassword(response){
        if(response == true){
            window.location.reload(true);
        } else{
            alert(response.error);
        }   
    }

    // Transaction Data

    function transactionList(response) {
        
        if(response.response_code != 200) return false;
        let data = response.data;
        html = '';
        $(data).each(function(item){
        console.log(this);
            html += `<tr>
                        <td class="text-center py-4">${(new Date(this.updated_at).toLocaleDateString("hi-IN"))}</td>
                        <td class="text-center py-4">${(this.payment_type==0)?'Deposit':'Withdraw'}</td>
                        <td class="text-center py-4">${this.transfer_amount}</td>
                        <td class="text-center py-4">${this.remark}</td>
                    </tr>`;
        });

        $('.transaction_statement').html(html);
    }

    $('.payment_type').on('change',function(){
        let form = $(this).parents('form');
        getModelData(form,$(this).val(),transactionList);
    });
    
    $(document).ready(function(){
        let form = $('.payment_type').parents('form');
        getModelData(form,0,transactionList);
    });
</script>
@endsection