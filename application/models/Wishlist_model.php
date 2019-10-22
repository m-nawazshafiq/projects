<?php
class Wishlist_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function SaveWish($data)
    {
        $this->db->insert('wishlist', $data);
        $insertId = $this->db->insert_id();


        return  $insertId;
    }
    public function GetCart()
    {
        $this->db->select('*');
        $this->db->from('cart');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function deleteCartProduct($productId)
    {
        $this->db->where("Id", $productId);
        $this->db->delete("cart");
    }

    public function getCartProductById($id)
    {
        $this->db->where("id", $id);
        return $this->db->get("cart")->row();
    }

    public function update($id, $formData)
    {
        $this->db->where("id", $id);
        $this->db->update("cart", $formData);
        die("Muhammd Tala");
    }

    public function getWishlistByUserId($id)
    {
        $this->db->select("productid");
        $this->db->where("userid", $id);
        $results = $this->db->get("wishlist")->result();

        if (count($results) > 0) {
            $productIds = array();

            foreach ($results as $result) {
                $productIds[] = $result->productid;
            }

            $this->db->select("*");
            $this->db->where_in("Id", $productIds);
            $productsDetail = $this->db->get("product")->result();
            return $productsDetail;
        }
        return $results;
    }
}
