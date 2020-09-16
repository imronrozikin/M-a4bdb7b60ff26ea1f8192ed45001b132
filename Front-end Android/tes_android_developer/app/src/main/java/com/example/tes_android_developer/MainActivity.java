package com.example.tes_android_developer;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.app.AlertDialog;
import android.app.ProgressDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.EditText;
import android.widget.RatingBar;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    TextView hello, username, waktu, logout;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        logout= (TextView)findViewById(R.id.logout);
        hello = (TextView)findViewById(R.id.hello);
        Intent intent = getIntent();
        final String usernameIntent = intent.getStringExtra("username");
        final String waktuIntent = intent.getStringExtra("waktu");

        logout.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent logout = new Intent(MainActivity.this, Login.class);
                startActivity(logout);
            }
        });

        hello.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                AlertDialog.Builder builder = new AlertDialog.Builder(MainActivity.this);
                builder.setCancelable(true);

                View view1 = getLayoutInflater().inflate(R.layout.activity_status, null);
                username = (TextView) view1.findViewById(R.id.usernameLogin);
                waktu = (TextView)view1.findViewById(R.id.waktuLogin);
                username.setText(usernameIntent);
                waktu.setText(waktuIntent);
                builder.setView(view1);

                builder.setNegativeButton("CANCEL", new DialogInterface.OnClickListener() {
                    @Override
                    public void onClick(DialogInterface dialogInterface, int i) {
                        dialogInterface.dismiss();
                    }
                });


                AlertDialog alertDialog = builder.create();
                alertDialog.show();
            }
        });

    }
}
