<?php
class User
{
    private $pdo;

    public $id;
    public $email;
    public $passwords;
    public $phone;
    public $company;
    public $birthdate;

    public function __CONSTRUCT()
    {
        try {
            $this->pdo = Database::StartUp();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function All()
    {
        try {
            $query = $this->pdo->prepare("SELECT * FROM users");
            $query->execute();

            return $query->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     * @param User\ $data 
     */
    public function Register(User $data)
    {
        try {
            $sql = "INSERT INTO users (email,passwords,phone,company,birthdate) 
		        VALUES (?, ?, ?, ?, ?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->email,
                        $data->passwords,
                        $data->phone,
                        $data->company,
                        $data->birthdate
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getID($id)
    {
        try {
            $uid = $this->pdo
                ->prepare("SELECT * FROM users WHERE id = ?");


            $uid->execute(array($id));
            return $uid->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     * @param  array  $data
     */
    public function Update($data)
    {
        try {
            $sql = "UPDATE users SET 
						email          = ?, 
						passwords        = ?,
                        phone        = ?,
						company            = ?, 
						birthdate = ?
				    WHERE id = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->email,
                        $data->passwords,
                        $data->phone,
                        $data->company,
                        $data->birthdate,
                        $data->id
                    )
                );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     */
    public function Delete($id)
    {
        try {
            $remove = $this->pdo
                ->prepare("DELETE FROM users WHERE id = ?");

            $remove->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}