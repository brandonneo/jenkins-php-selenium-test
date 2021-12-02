pipeline {
	 agent any

	 stages {
	 stage ('Checkout') {
		steps {
	 git branch:'main', url: 'https://github.com/brandonneo/jenkins-php-selenium-test.git'
	 }
 }
 stage('Headless Browser Test') {
	 agent {
		 docker {
			 image 'maven:3-alpine'
			 args '-v /root/.m2:/root/.m2'
		 }
	 }
	 steps {
		 sh 'mvn -B -DskipTests clean package'
		 sh 'mvn test'
	 }
	 post {
		 always {
			 junit 'target/surefire-reports/*.xml'
		 }
	 }
 }

 stage('Code Quality Check via SonarQube') {
 steps {
 script {
 def scannerHome = tool 'SonarQube';
 withSonarQubeEnv('SonarQube') {
 sh "${scannerHome}/bin/sonar-scanner -Dsonar.projectKey=OWASP -Dsonar.sources=."
 }
 }
 }
 }
 }
 post {
 always {
 recordIssues enabledForFailure: true, tool: sonarQube()
 }
 }
}
