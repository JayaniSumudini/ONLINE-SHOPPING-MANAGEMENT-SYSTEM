ΚώΊΎ   4 £
 # Y
  Z [
  \ ] ^ _ ` _ a _ b
  c d e f g
  h
 i j d k _ k l m n o p o ` o q m c r
  Y s
  t u
 v w
  x y z
  {
  | } InnerClasses <init> (Ljava/lang/String;)V Code LineNumberTable LocalVariableTable this ALorg/apache/derbyTesting/functionTests/tests/store/Derby4923Test; name Ljava/lang/String; testDERBY_4923 ()V i I stmt Ljava/sql/Statement; insert_stmt Ljava/sql/PreparedStatement; delete_stmt update_stmt pad_blob [B StackMapTable s ~  9 
Exceptions   callCompress @(Ljava/sql/Connection;Ljava/lang/String;Ljava/lang/String;ZZZZ)V conn Ljava/sql/Connection; 
schemaName 	tableName 	purgeRows Z defragmentRows truncateEnd commit_operation cstmt Ljava/sql/CallableStatement;    	baseSuite *(Ljava/lang/String;)Ljunit/framework/Test; suite -Lorg/apache/derbyTesting/junit/BaseTestSuite; ()Ljunit/framework/Test; 
SourceFile Derby4923Test.java % &   &INSERT INTO TESTBADUPDATE VALUES(?, ?)   DELETE FROM TESTBADUPDATE /UPDATE TESTBADUPDATE set value = ? where id = ?         / ~   APP TESTBADUPDATE B C     / ;call SYSCS_UTIL.SYSCS_INPLACE_COMPRESS_TABLE(?, ?, ?, ?, ?)         +org/apache/derbyTesting/junit/BaseTestSuite ?org/apache/derbyTesting/functionTests/tests/store/Derby4923Test   Aorg/apache/derbyTesting/functionTests/tests/store/Derby4923Test$1     % ‘ Derby4923Test Derby4923Test:embedded R S ’ ‘ ?org/apache/derbyTesting/functionTests/tests/store/StoreBaseTest java/sql/Statement java/sql/PreparedStatement java/sql/SQLException java/lang/InterruptedException java/sql/Connection java/lang/String java/sql/CallableStatement createStatement ()Ljava/sql/Statement; prepareStatement 0(Ljava/lang/String;)Ljava/sql/PreparedStatement; setInt (II)V setBytes (I[B)V executeUpdate ()I commit getConnection ()Ljava/sql/Connection; java/util/Arrays fill ([BB)V close prepareCall 0(Ljava/lang/String;)Ljava/sql/CallableStatement; 	setString (ILjava/lang/String;)V execute ()Z addTestSuite (Ljava/lang/Class;)V 7org/apache/derbyTesting/junit/DatabasePropertyTestSetup setLockTimeouts 0(Ljunit/framework/Test;II)Ljunit/framework/Test; (Ljunit/framework/Test;)V addTest !  #       % &  '   >     *+· ±    (   
 