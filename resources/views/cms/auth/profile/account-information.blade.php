@extends('cms.auth.profile.profile')

@section('profile-content')
<!--begin::Profile Account Information-->
<div class="d-flex flex-row">
    <!--begin::Content-->
    <div class="flex-row-fluid ml-lg-8">
        <!--begin::Card-->
        <div class="card card-custom">
            <!--begin::Header-->
            <div class="card-header py-3">
                <div class="card-title align-items-start flex-column">
                    <h3 class="card-label font-weight-bolder text-dark">Store Information</h3>
                    <span class="text-muted font-weight-bold font-size-sm mt-1">Change your store settings</span>
                </div>
                <div class="card-toolbar">
                    <button type="button" onclick="performUpdate()" class="btn btn-success mr-2">Save Changes</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Form-->
            <form class="form">
                <div class="card-body">
                    <!--begin::Heading-->
                    <div class="row">
                        <label class="col-xl-3"></label>
                        <div class="col-lg-9 col-xl-6">
                            <h5 class="font-weight-bold mb-6">Account:</h5>
                        </div>
                    </div>
                    <!--begin::Form Group-->
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Store Name</label>
                        <div class="col-lg-9 col-xl-6">
                            <input class="form-control form-control-lg form-control-solid" id="store_name" type="text"
                                value="{{$user->store_name}}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Address</label>
                        <div class="col-lg-9 col-xl-6">
                            <input class="form-control form-control-lg form-control-solid" id="address" type="text"
                                value="{{$user->address}}" />
                        </div>
                    </div>
                    <!--begin::Form Group-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--begin::Form Group-->
                    <div class="row">
                        <label class="col-xl-3"></label>
                        <div class="col-lg-9 col-xl-6">
                            <h5 class="font-weight-bold mb-6">Social:</h5>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Facebook</label>
                        <div class="col-lg-9 col-xl-6">
                            <input class="form-control form-control-lg form-control-solid" id="facebook" type="text"
                                value="{{$user->facebook}}" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Instagram</label>
                        <div class="col-lg-9 col-xl-6">
                            <input class="form-control form-control-lg form-control-solid" id="instagram" type="text"
                                value="{{$user->instagram}}" />
                        </div>
                    </div>

                    <!--begin::Form Group-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--begin::Form Group-->
                    <div class="row">
                        <label class="col-xl-3"></label>
                        <div class="col-lg-9 col-xl-6">
                            <h5 class="font-weight-bold mb-6">Notifications:</h5>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Firebase Server Key</label>

                        <div class="col-lg-9 col-xl-6">
                            {{-- <input class="form-control form-control-lg form-control-solid" id="firebase_server_key"
                                type="text" value="{{$user->firebase_server_key}}" /> --}}
                            <textarea class="form-control form-control-lg form-control-solid" style="resize: none"
                                rows="5" id="firebase_server_key" maxlength="300"
                                placeholder="Enter firebase server key">{{$user->firebase_key}}</textarea>
                        </div>
                    </div>

                    <!--begin::Form Group-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--begin::Form Group-->
                    <div class="row">
                        <label class="col-xl-3"></label>
                        <div class="col-lg-9 col-xl-6">
                            <h5 class="font-weight-bold mb-6">Security:</h5>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Store API Key</label>
                        <div class="col-lg-9 col-xl-6">
                            <input class="form-control form-control-lg form-control-solid" disabled type="text"
                                value="{{$user->store_uuid}}" />
                            <p class="form-text text-muted pt-2">This is your store unique API Key which will be used by
                                mobile developers in each new registration process, it must be sent in register request
                                body under key with name 'STORE_API_KEY'.
                            </p>
                        </div>
                    </div>
                    @if(!$user->verified)
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Email verification</label>
                        <div class="col-lg-9 col-xl-6">
                            <button type="button" class="btn btn-light-primary font-weight-bold btn-sm">Send Email
                                Verification</button>
                            <p class="form-text text-muted pt-2">After you registered, you must verify your email
                                account in order to enable all system functionalities and allow users to register throw
                                your store API.</p>
                        </div>
                    </div>
                    @endif
                    <!--begin::Form Group-->
                    {{-- <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">Deactivate</label>
                        <div class="col-lg-9 col-xl-6">
                            <button type="button" class="btn btn-light-danger font-weight-bold btn-sm">Deactivate your
                                account ?</button>
                            <p class="form-text text-muted pt-2">If you deactivate your store account, all users
                                registerd in your store will be denied to use the app until you send a request to
                                reactivate again, be aware that your request will be evaluated and my be rejected!.</p>
                        </div>
                    </div> --}}
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Content-->
</div>
@endsection
<!--end::Profile Account Information-->

@section('scripts')
<script>
    function performUpdate(){
        let data = {
            store_name: document.getElementById('store_name').value,
            address: document.getElementById('address').value,
            firebase_server_key: document.getElementById('firebase_server_key').value,
            facebook: document.getElementById('facebook').value,
            instagram: document.getElementById('instagram').value,
        }
        update('/cms/admin/profile/account',data);
    }
</script>
@endsection