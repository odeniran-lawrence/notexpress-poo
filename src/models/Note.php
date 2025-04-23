<?php 

namespace models;

use models\AbstractModel;

class Note extends AbstractModel
{
    
    private string $title;
    private string $slug;
    private string $content;
    private string $image;

    
    protected string $table = 'notes'; // defini la table ou chercher les donner
    protected string $fields = 'title, slug, content, image'; // renseigne les champs de la table
    protected string $values = ':title, :slug, :content, :image';// indique les valeurs pou sql
    /**
     * defini les valeur a binder(:title,:slug,:content,:image)
     * bind: attache une valeur a une variable pour la requete sql
     */
    protected array $valuesBinded = [
        ':title' => '',
        ':slug' => '',
        ':content' => '', 
        ':image' => ''
    ];


    /**
     * Method bindValues()
     * To bind values to the query
     * @param void
     * @return void
     */
    public function bindValues(): void
    {
        $this->valuesBinded[':title'] = $this->title;
        $this->valuesBinded[':slug'] = $this->slug;
        $this->valuesBinded[':content'] = $this->content;
        $this->valuesBinded[':image'] = $this->image;
    }
                    


    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

  

    /**
     * Get the value of slug
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * Set the value of slug
     */
    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }
}
// Don't write any code below this line