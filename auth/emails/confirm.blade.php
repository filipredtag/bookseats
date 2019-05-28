@extends('auth.emails.template')

@section('content')
                <tr>
                    <td class="one-column profile-pic-section" style="background-color:#d9d9d9;padding-top:12px;padding-bottom:12px;padding-right:30px;padding-left:30px;" >
                        <table width="100%" style="border-spacing:0;font-family:sans-serif, arial;color:#333333;" >
                            <tr>
                                <td class="" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
                                    <table class="contents" style="border-spacing:0;font-family:sans-serif, arial;color:#333333;width:100%;text-align:left;" >
                                        <tr>
                                            <td class="inner align-left" style="padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;text-align:left;" >
                                                <p class="white-text" style="margin-top:0;margin-right:0;margin-left:0;margin-bottom:10px;font-family:arial, sans-serif;font-size:28px;font-weight:bold;color:#5e5e5e;" >@lang('profile.emails.register.confirmation.thank_you') {{ ucfirst($user->FirstName) }}</p>
                                                <p class="grey-text" style="margin-top:0;margin-right:0;margin-left:0;margin-bottom:10px;font-family:arial, sans-serif;font-size:20px;font-weight:bold;color:#5e5e5e;" >@lang('profile.emails.register.confirmation.intro')</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td class="confirmation-section" style="padding-top:22px;padding-bottom:22px;padding-right:35px;padding-left:35px;background-color:#fff;text-align:center;" >
                        <table width="100%" style="border-spacing:0;font-family:sans-serif, arial;color:#333333;" >
                            <tr>
                                <td style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;" >
                                    <table class="contents" style="border-spacing:0;font-family:sans-serif, arial;color:#333333;width:100%;" >
                                        <tr>
                                            <td class="align-center inner-bottom-20" style="padding-top:0;padding-right:0;padding-left:0;padding-bottom:20px;text-align:center;" >
                                                <p class="black-text" style="margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;font-family:arial, sans-serif;font-size:21px;font-weight:bold;color:#000;" >@lang('profile.emails.register.confirmation.please_confirm')</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-center green-bg border-radius-10" style="padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;border-radius:10px;background-color:#2980b9;text-align:center;" >
                                                <a class="button" href="{{ $siteUrl.'/profile/confirm/' . $user->ConfirmationToken }}" style="background-color:#2980b9;color:#ffffff;text-decoration:none;display:inline-block;width:100%;border-top-width:12px;border-top-style:solid;border-top-color:#2980b9;border-bottom-width:12px;border-bottom-style:solid;border-bottom-color:#2980b9;font-size:21px;font-weight:bold;border-radius:10px;font-family:arial,sans-serif;" >{{ strtoupper(trans('profile.emails.buttons.confirm')) }}</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="inner-top-20" style="padding-bottom:0;padding-right:0;padding-left:0;padding-top:20px;" >
                                                <p class="grey-text align-left" style="margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;font-family:arial, sans-serif;font-size:13px;color:#595959;text-align:left;" >
                                                    @lang('profile.emails.register.confirmation.link') <a href="{{ $siteUrl.'/profile/confirm/' . $user->ConfirmationToken }}">{{ $siteUrl.'/profile/confirm/' . $user->ConfirmationToken }}</a>
                                                </p>
                                                <p class="grey-text align-left" style="margin-top:20;margin-bottom:0;margin-right:0;margin-left:0;font-family:arial, sans-serif;font-size:13px;color:#595959;text-align:left;" >
                                                    @lang('profile.emails.register.confirmation.link-expiry') <strong>{{ $user->ConfirmationTokenExpiryFormatted }}</strong>.   @lang('profile.emails.register.confirmation.register')
                                                </p>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="inner-top-20" style="padding-bottom:0;padding-right:0;padding-left:0;padding-top:20px;" >
                                                <p class="grey-text align-left" style="margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;font-family:arial, sans-serif;font-size:13px;color:#595959;text-align:left;" >@lang('profile.emails.register.confirmation.received_by_mistake')
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
@endsection
