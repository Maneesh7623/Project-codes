package com.example.yourappname;
import android.app.Activity;
import android.os.Bundle;
import android.view.View;
import android.view.animation.Animation;
import android.view.animation.TranslateAnimation;
import android.widget.RelativeLayout;
public class MainActivity extends Activity {
 private View ballView;
 private int screenHeight;
 @Override
 protected void onCreate(Bundle savedInstanceState) {
 super.onCreate(savedInstanceState);
 setContentView(R.layout.activity_main);
 ballView = findViewById(R.id.ballView);
 screenHeight = getResources().getDisplayMetrics().heightPixels;
 startBouncingAnimation();
 }
 private void startBouncingAnimation() {
 TranslateAnimation animation = new TranslateAnimation(0, 0, 0, screenHeight);
 animation.setDuration(2000);
 animation.setFillAfter(true);
 animation.setRepeatMode(Animation.REVERSE);
 animation.setRepeatCount(Animation.INFINITE);
 ballView.startAnimation(animation);
 }
}