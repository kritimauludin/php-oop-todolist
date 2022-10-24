<?php

namespace Entity {
    class TodoList
    {

        private int $id;
        private string $todo;

        public function __construct(string $todo = "")
        {
            $this->todo = $todo;
        }

        /**
         * Get the value of todo
         *
         * @return string
         */
        public function getTodo(): string
        {
            return $this->todo;
        }

        /**
         * Set the value of todo
         *
         * @param string $todo
         *
         * @return self
         */
        public function setTodo(string $todo): self
        {
            $this->todo = $todo;

            return $this;
        }

        /**
         * Get the value of id
         *
         * @return int
         */
        public function getId(): int
        {
            return $this->id;
        }

        /**
         * Set the value of id
         *
         * @param int $id
         *
         * @return self
         */
        public function setId(int $id): self
        {
            $this->id = $id;

            return $this;
        }
    }
}
