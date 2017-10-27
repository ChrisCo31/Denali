<?php
/**
 * Created by PhpStorm.
 * User: mishi
 * Date: 26/10/2017
 * Time: 11:08
 */
public function initUserSession($name, $email, $role)
{
    $this->setName($name);
    $this->setEmail($email);
    $this->setRole($role);
}
public function setName($name)
{
    $_SESSION['user']['name']= $name;
}
public function getName()
{
    return $_SESSION['user']['name'];
}
public function setEmail($email)
{
    $_SESSION['user']['email']= $email;
}
public function getEmail()
{
    return $_SESSION['user']['email'];
}
public function setRole($role)
{
    $_SESSION['user']['role'] = $role;
}
public function getRole()
{
    return $_SESSION['user']['role'];
}



<?php
$user = new UserSession();
$user->getName();
var_dump($user);?>

<?php ($user->getRole() == 'ADMIN') ? $class = "navbar-default" : $class = "navbar-inverse";?>
<nav class="navbar <?php echo $class;?> ">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Billet simple pour l'Alaska</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="Home">Accueil</a></li>
                <!--<li><a href="Register">S'inscrire</a></li>-->
                <?php if($user->getRole() == 'ADMIN'):?>
                    <li><a href="Dashboard">Tableau de bord</a></li>
                    <li><a href="CreateArticle">Nouveau chapitre</a></li>
                    <li><a href="Logout">Quitter</a></li>
                <?php else :?>
                    <li><a href="Login">Se connecter</a></li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</nav>
<?php
class UserSession
{
private $name;
private $email;
private $role;

/**
* @return mixed
*/
public function getName()
{
return $this->name;
}

/**
* @param mixed $name
*/
public function setName($name)
{
$this->name = $name;
}

/**
* @return mixed
*/
public function getEmail()
{
return $this->email;
}

/**
* @param mixed $email
*/
public function setEmail($email)
{
$this->email = $email;
}

/**
* @return mixed
*/
public function getRole()
{
return $this->role;
}

/**
* @param mixed $role
*/
public function setRole($role)
{
$this->role = $role;
}


}
<?php
/**
 * Created by PhpStorm.
 * User: mishi
 * Date: 26/10/2017
 * Time: 11:08
 */
class Session
{
    private $name;
    private $email;
    private $role;
    public function __construct(array $data=[])
    {
        if(!empty($data))
        {
            $this->hydrate($data);
        }
    }
    public function hydrate(array $data)
    {
        $this->name=$data['username'];
        $this->email = $data['email'];
        $this->role = $data['role'];
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

}