<?php
/**
 * Domestic response handle
 * 
 * @author Viet Artisans
 * @since  1.0.2
 */
namespace WooOnePay\Gateways;

use WooOnePay\Responses\WooOnepayResponse;
use WooOnePay\Gateways\WooOnePayDomestic;

class WooOnePayDomesticResponse extends WooOnepayResponse
{
	public function __construct()
	{
		$this->hashCode = 'A3EFDFABA8653DF2342E8DAC29B51AF0';
		parent::__construct();
	}

	public function getResponseDescription($responseCode)
	{
		switch ($responseCode) {
			case "0" :
				$result = "Giao dịch thành công - Approved";
				break;
			case "1" :
				$result = "Ngân hàng từ chối giao dịch - Bank Declined";
				break;
			case "3" :
				$result = "Mã đơn vị không tồn tại - Merchant not exist";
				break;
			case "4" :
				$result = "Không đúng access code - Invalid access code";
				break;
			case "5" :
				$result = "Số tiền không hợp lệ - Invalid amount";
				break;
			case "6" :
				$result = "Mã tiền tệ không tồn tại - Invalid currency code";
				break;
			case "7" :
				$result = "Lỗi không xác định - Unspecified Failure ";
				break;
			case "8" :
				$result = "Số thẻ không đúng - Invalid card Number";
				break;
			case "9" :
				$result = "Tên chủ thẻ không đúng - Invalid card name";
				break;
			case "10" :
				$result = "Thẻ hết hạn/Thẻ bị khóa - Expired Card";
				break;
			case "11" :
				$result = "Thẻ chưa đăng ký sử dụng dịch vụ - Card Not Registed Service(internet banking)";
				break;
			case "12" :
				$result = "Ngày phát hành/Hết hạn không đúng - Invalid card date";
				break;
			case "13" :
				$result = "Vượt quá hạn mức thanh toán - Exist Amount";
				break;
			case "21" :
				$result = "Số tiền không đủ để thanh toán - Insufficient fund";
				break;
			case "99" :
				$result = "Người sủ dụng hủy giao dịch - User cancel";
				break;
			default :
				$result = "Giao dịch thất bại - Failured";
		}
		return $result;
	}

	/**
	 * get return page of domestic
	 * 
	 * @return int
	 */
	public function thankyou()
	{
		$gateway = new WooOnePayDomestic;
		return $gateway->get_option('receipt_return_url'); 
	}

}