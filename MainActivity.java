package com.example.login;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;

import android.app.ListActivity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.auth.AuthResult;
import com.google.firebase.auth.FirebaseAuth;

public class MainActivity extends ListActivity {

    private Firebase mFirebaseRef;
    private EditText mMessageEdit;
    private String mUsername;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Firebase.setAndroidContext(this);


        mFirebaseRef = new Firebase("https://login.firebaseio.com");
        mMessageEdit = (EditText) this.findViewById(R.id.message_text);

        mListAdapter = new FirebaseListAdapter<ChatMessage>(mFirebaseRef, ChatMessage.class, R.layout.message_layout, this) {
            @Override
            protected void populateView(View v, ChatMessage model) {
                ((TextView)v.findViewById(R.id.username_text_view)).setText(model.getName());
                ((TextView)v.findViewById(R.id.message_text_view)).setText(model.getMessage());
            }
        };
        setListAdapter(mListAdapter);


        public boolean onCreateOptionsMenu (Menu menu){
            getMenuInflater().inflate(R.menu.menu_main, menu);
            return true;
        }
        public void onSendButtonClick(View v) {
            String message = mMessageEdit.getText().toString();
            mFirebaseRef.push().setValue(new SardinesMessage("puf", message));
            mMessageEdit.setText("");
        }
        mFirebaseRef.addAuthStateListener(new Firebase.AuthStateListener() {
            @Override
            public void onAuthStateChanged(AuthData authData) {
                if(authData != null) {
                    mUsername = ((String)authData.getProviderData().get("email"));
                    findViewById(R.id.login).setVisibility(View.INVISIBLE);
                }
                else {
                    mUsername = null;
                    findViewById(R.id.login).setVisibility(View.VISIBLE);
                }
            }
        });

    }
}







