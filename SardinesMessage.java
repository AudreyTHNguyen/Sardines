package com.example.login;

public class SardinesMessage {
        private String name;
        private String message;

        public SardinesMessage() {
            // necessary for Firebase's deserializer
        }
        public SardinesMessage(String name, String message) {
            this.name = name;
            this.message = message;
        }

        public String getName() {
            return name;
        }

        public String getMessage() {
            return message;
        }
    }
}
