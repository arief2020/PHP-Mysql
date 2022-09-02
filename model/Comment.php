<?php

namespace Model {
    class Comment {
        public function __construct(private ?int $id = null,
                                    private ?string $email = null,
                                    private ?string $comment = null)
        {
            
        }

        public function getId(): ?int{
            return $this->id;
        }
        public function setId(?int $id) {
            $this->id = $id;
        }

        public function getEmail(): ?string{
            return $this->email;
        }
        public function setEmail(?string $email) {
            $this->email = $email;
        }
        
        public function getComment(): ?string{
            return $this->comment;
        }
        public function setComment(?string $comment) {
            $this->comment = $comment;
        }


    }
}